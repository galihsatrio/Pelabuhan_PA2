<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function index(){
        return view('pemesanan.booking');
    }

    public function store(Request $request){
        $data = $request->all();
        
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
        ]);

        $kendaraan = new Kendaraan;
        $kendaraan->pesanan_id = $pesanan->id;
        $kendaraan->tanggal = $data['tanggal'];
        $kendaraan->waktu = $data['waktu'];
        $kendaraan->nama = $data['nama'];
        $kendaraan->jenis = $data['jenis'];
        $kendaraan->no_polisi = $data['no_polisi'];
        $kendaraan->save();

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
     
        return back()->with('success', 'Data anda telah masuk.');
    }


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
