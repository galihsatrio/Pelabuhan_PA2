<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use App\Models\Penumpang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CountController extends Controller
{
    public function index(){
        $penumpang = Penumpang::count();
        $kendaraan = Kendaraan::count();
        $berita = Berita::count();
        $informasi = Informasi::count();
        $batas = DB::table('batas')->first();
        $pesan = Pesanan::count();


        // $penumpang = Penumpang::where('id',$id)->count();
        // $penumpang = DB:table('penumpangs')->count();
        return view('admin', compact('penumpang', 'kendaraan', 'berita', 'informasi', 'batas', 'pesan'));
    }

    public function batasPenumpang($value) {
        $penumpang = DB::table('batas')->update(['batas_penumpang' => $value]);
        Alert::warning('Berhasil', 'Batas penumpang berhasil diubah');
        return redirect('/admin');
    }

    public function batasKendaraan($value) {
        $penumpang = DB::table('batas')->update(['batas_kendaraan' => $value]);
        Alert::warning('Berhasil', 'Batas kendaraan berhasil diubah');
        return redirect('/admin');
    }

    public function petugas(){
        $penumpang = Penumpang::count();
        $kendaraan = Kendaraan::count();
        $berita = Berita::count();
        $informasi = Informasi::count();
        // $penumpang = Penumpang::where('id',$id)->count();
        // $penumpang = DB:table('penumpangs')->count();
        return view('petugass', compact('penumpang', 'kendaraan', 'berita', 'informasi'));
    }
}
