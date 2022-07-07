<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::table('pesanans')->update(['status_pembayaran' => 1]);

        return redirect('/pemesanan')->with('success', 'Verifikasi pembayaran berhasil.');
    }
}
