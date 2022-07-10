<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Dompdf\Dompdf;
use Carbon\Carbon;

class PesanController extends Controller
{
    public function index(){
        return view('pemesanan.booking');
    }

    public function store(Request $request){
        $data = $request->all();


        $pesanan = DB::table('pesanans')->where('konfirmasi', 1)->where('tanggal', $data['tanggal'])->get();
        $totalPenumpang = 0;
        $totalKendaraan = 0;
        foreach($pesanan as $value) {
            $penumpang = DB::table('penumpangs')->where('pesanan_id', $value->id)->count();
            $kendaraan = DB::table('kendaraans')->where('pesanan_id', $value->id)->count();
            $totalPenumpang += $penumpang;
            $totalKendaraan += $kendaraan;
        }
        $totalKendaraan = 100;
        $batas = DB::table('batas')->first();
        if ($batas->batas_penumpang < $totalPenumpang || $batas->batas_kendaraan < $totalKendaraan) {
            return redirect()->back()->with('error', '');
        }


        $this->validate($request,[
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'no_polisi' => 'nullable'
        ]);

        $kode = 'PMSN00'.Pesanan::all()->count() + 1;
        $pesanan = Pesanan::create([
            'kode' => $kode,
            'tanggal' => $data['tanggal'],
            'waktu' => $data['waktu'],
            'status_pembayaran' => 0,
            'user_id' => Auth()->user()->id,
        ]);

        $kendaraan = Kendaraan::create([
            'pesanan_id' => $pesanan->id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'no_polisi' => $request->no_polisi,
        ]);

        $request->validate([
            'addMoreInputFields.*.nama' => 'required',
            'addMoreInputFields.*.jk' => 'required',
            'addMoreInputFields.*.umur' => 'required',
            'addMoreInputFields.*.alamat' => 'required',
        ]);

        foreach ($request->addMoreInputFields as $key => $value) {
            Penumpang::create([
                "nama" => $value['nama'],
                "jk" => $value['jk'],
                "umur" => $value['umur'],
                "alamat" => $value['alamat'],
                "pesanan_id" => $pesanan->id
            ]);
        }

        Alert::warning('Pemesanan Tiket Berhasil', 'Konfirmasi pesanan untuk pengecekkan kembali');

        return redirect('/history-pemesanan/konfirmasi/'.Auth()->user()->id.'/'.$pesanan->id);
    }

    public function historyPemesanan() {

        $user = Auth()->user();

        $model = DB::table('pesanans')
            ->select(
                'pesanans.*'
            )
            ->where('pesanans.user_id', $user->id)
            ->paginate(5);

        return view('pemesanan.history', ['model' => $model]);
    }

    public function indexKonfirm() {

        $user = Auth()->user();

        $model = DB::table('pesanans')
            ->select('pesanans.*')
            ->where('pesanans.user_id', $user->id)
            ->where('pesanans.konfirmasi', 0)
            ->paginate(5);

        return view('konfirmasi.konfirmasi_pemesanan', ['model' => $model]);
    }

    public function detailHistoryPemesanan($auth, $id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->where('pesanans.user_id', $auth)
            ->first();
        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/history-pemesanan';

        return view('pemesanan.detail-history', ['pemesanan' => $pemesanan]);
    }

    public function konfirmasiPemesanan($auth, $id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->where('pesanans.user_id', $auth)
            ->first();

        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/history-pemesanan';

        return view('konfirmasi.konfirmasi', ['pemesanan' => $pemesanan]);
    }

    public function detailKonfirm($auth, $id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->where('pesanans.user_id', $auth)
            ->first();

        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();

        $data = (array) DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->where('pesanans.user_id', $auth)
            ->first();

        $disabled = strtotime($pemesanan->tanggal) < time() ? 'disabled' : '';
        // dd( strtotime($pemesanan->tanggal) < time());
        return view('konfirmasi.detail', ['model' => $pemesanan, 'data' => $data, 'disabled' => $disabled]);
    }

    public function konfirm($auth, $id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->where('pesanans.user_id', $auth)
            ->update([
                'konfirmasi' => 1
            ]);

        return redirect('/konfirmasi');
    }

    public function simpanKonfirm(Request $request, $id) {

        $pesanan = Pesanan::where('id', $id)->update([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'konfirmasi' => 1,
        ]);

        $kendaraan = Kendaraan::where('pesanan_id', $id)->update([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'no_polisi' => $request->no_polisi,
        ]);

        $request->validate([
            'addMoreInputFields.*.nama' => 'required',
            'addMoreInputFields.*.jk' => 'required',
            'addMoreInputFields.*.umur' => 'required',
            'addMoreInputFields.*.alamat' => 'required',
        ]);

        foreach ($request->addMoreInputFields as $key => $value) {
            if (isset($value['id'])) {
                DB::table('penumpangs')->where('id', $value['id'])->delete();
            }
        }

        $totalHarga = 0;
        foreach ($request->addMoreInputFields as $key => $value) {
            Penumpang::create([
                "nama" => $value['nama'],
                "jk" => $value['jk'],
                "umur" => $value['umur'],
                "alamat" => $value['alamat'],
                "pesanan_id" => $id,
                'harga' => $value['harga']
            ]);
            $totalHarga += $value['harga'];
        }

        $kodeInvoice = 'INVC00'.Pesanan::all()->count() + 1;
        $invoice = DB::table('invoice')->insert([
            'kode' => $kodeInvoice,
            'pesanan_id' => $id,
            'total' => $totalHarga,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        Alert::success('Konfirmasi Pemesanan Berhasil', 'Silahkan cetak faktur dan melanjutkan ke pembayaran');
        return redirect('/konfirmasi');
    }

    public function faktur($user, $id) {

        $model = [];
        $pesanan = (array) DB::table('pesanans')->where('id', $id)->where('user_id', $user)->first();
        $kendaraan = DB::table('kendaraans')
            ->select('kendaraans.no_polisi', 'kendaraans.nama as pemilik', 'kendaraans.jenis', 'kendaraans.harga')
            ->where('pesanan_id', $pesanan['id'])
            ->get()->toArray();
        $penumpang = DB::table('penumpangs')->where('pesanan_id', $pesanan['id'])->get()->toArray();

        $model= $pesanan;
        $model['item'] = $kendaraan;
        foreach ($penumpang as $value) {
            array_push($model['item'], $value);
        }
        $total = 0;
        foreach ($model['item'] as $value ) {
            $total += $value->harga;
            $model['total'] = $total;
        }

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('konfirmasi.cetak_faktur',  ['model' => $model]));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('faktur.pdf', ['Attachment' => false]);

        // return view('pemesanan.cetak_faktur', ['model' => $model]);
    }

    // public function cetakFaktur() {
    //     // instantiate and use the dompdf class
    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml(view('pemesanan.cetak_faktur'));

    //     // (Optional) Setup the paper size and orientation
    //     $dompdf->setPaper('A4', 'landscape');

    //     // Render the HTML as PDF
    //     $dompdf->render();

    //     // Output the generated PDF to Browser
    //     $dompdf->stream('faktur.pdf', ['Attachment' => false]);
    // }




















    // public function store(Request $request){

    //     $data = $request->all();

    //     // dd($data);
    //     $this->validate($request,[
    //         'tanggal' => 'required',
    //         'waktu' => 'required',
    //         'nama' => 'required',
    //         'jenis' => 'required',
    //         'no_polisi' => 'required'
    //     ]);

    //     $kendaraan = new Kendaraan;
    //     $kendaraan->tanggal = $data['tanggal'];
    //     $kendaraan->waktu = $data['waktu'];
    //     $kendaraan->nama = $data['nama'];
    //     $kendaraan->jenis = $data['jenis'];
    //     $kendaraan->no_polisi = $data['no_polisi'];
    //     $kendaraan->save();

    //     Kendaraan::create($request->all());

    //      $this->validate($request,[
    //         'nama' => 'required',
    //         'jk' => 'required',
    //         'umur' => 'required',
    //         'alamat' => 'required'
    //     ]);

    //     foreach ($this->nama as $key => $value) {
    //         Penumpang::create([
    //             'jk' => $this->jk[$key],
    //             'nama' => $this->nama[$key],
    //             'umur' => $this->umur[$key],
    //             'alamat' => $this->alamat[$key]]);
    //     }

    //     foreach($request->nama as $key => $value){
    //         $penumpang = new Penumpang;
    //         $penumpang->nama = $value;
    //         $penumpang->jk = $value;
    //         $penumpang->umur = $value;
    //         $penumpang->alamat = $value;
    //         $penumpang->save();
    //     }
    //     foreach ($_POST['nama'] as $key => $value) {
    //     $penumpang = new Penumpang;
    //             $penumpang->nama = $data['nama'];
    //             $penumpang->jk = $data['jk'];
    //             $penumpang->umur = $data['umur'];
    //             $penumpang->alamat = $data['alamat'];
    //             $penumpang->save();
    //                             }


    //     $request->validate([
    //         'nama' => 'required',
    //         'jk' => 'required',
    //         'umur' => 'required',
    //         'alamat' => 'required'
    //     ]);

    //     Penumpang::create($request->all());

    //     return redirect()->back()->with('status','Data Berhasil Dimasukkan');
    // }
}
