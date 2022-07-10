<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Carbon\Carbon;

class PemesananController extends Controller
{
    public function index() {
        $data['pemesanans'] = Pesanan::orderBy('id','desc')->simplePaginate(5);
        $data['detail'] = '/pemesanan/detail/';
        $data['verifikasi'] = '/pemesanan/verifikasi-pembayaran/';

        return view('pemesanan.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function detail($id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->first();
        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/pemesanan';

        return view('pemesanan.detail', ['pemesanan' => $pemesanan]);
    }

    public function cetakBuktiPembayaran($id) {
        $model = [];
        $pesanan = (array) DB::table('pesanans')->where('id', $id)->first();
        $invoice = (array) DB::table('invoice')->where('pesanan_id', $id)->first();

        $kendaraan = DB::table('kendaraans')
            ->select('kendaraans.no_polisi', 'kendaraans.nama as pemilik', 'kendaraans.jenis', 'kendaraans.harga')
            ->where('pesanan_id', $pesanan['id'])
            ->get()->toArray();
        $penumpang = DB::table('penumpangs')->where('pesanan_id', $pesanan['id'])->get()->toArray();

        $model = $pesanan;
        $model['invoice'] = $invoice['kode'];
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
        $dompdf->loadHtml(view('pemesanan.cetak_bukti',  ['model' => $model]));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('bukti_pembayaran.pdf', ['Attachment' => false]);

    }

    public function indexPetugas() {
        $data['pemesanans'] = Pesanan::orderBy('id','desc')->simplePaginate(5);
        $data['detail'] = '/pemesanan-petugas/detail/';
        $data['verifikasi'] = '/pemesanan-petugas/verifikasi-pembayaran/';

        return view('petugas.index-petugas', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function detailPetugas($id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->first();
        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/pemesanan-petugas';

        return view('petugas.detail', ['pemesanan' => $pemesanan]);
    }

    public function lunasPetugas($id)
    {
        DB::table('pesanans')->update(['status_pembayaran' => 1]);

        return redirect('/pemesanan-petugas')->with('success', 'Verifikasi pembayaran berhasil.');
    }

    public function lunas($id)
    {
        DB::table('pesanans')->where('id', $id)->update(['status_pembayaran' => 1]);

        $kendaraan = DB::table('kendaraans')->where('pesanan_id', $id)->get();
        $penumpang = DB::table('penumpangs')->where('pesanan_id', $id)->get();

        $totalHarga = 0;
        foreach($kendaraan as $value) {
            $totalHarga += $value->harga;
        }
        foreach($penumpang as $value) {
            $totalHarga += $value->harga;
        }

        $kode = 'INVC00'.DB::table('invoice')->count() + 1;
        $pesanan = DB::table('invoice')->insert([
            'kode' => $kode,
            'pesanan_id' => $id,
            'total' => $totalHarga,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('/pemesanan')->with('success', 'Verifikasi pembayaran berhasil.');
    }
}
