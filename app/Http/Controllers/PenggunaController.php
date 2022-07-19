<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Galeri;
use App\Models\Profile;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{

    public function index()
    {
        $berita = Berita::orderBy('id', 'desc')->limit(3)->get();
        $informasi = Informasi::orderBy('id', 'desc')->limit(1)->get();
        $home1 = Profile::find(3);
        $home2 = Profile::find(4);
        
        return view('welcome',[
            'berita'=>$berita,
            'informasi'=>$informasi,
            'home1'=>$home1,
            'home2'=>$home2,
        ], compact('berita'));
    }

    // public function berita()
    // {
    //     $data['tampils'] = Berita::orderBy('id','desc')->simplePaginate(5);

    //     // return view('beritas.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 5);

    //     return view('tampil.index', $data);
    // }

    public function show(Berita $tampil,$id)
    {
        $tampil = Berita::find($id);

        return view('tampil.show',compact('tampil'));
    }

    public function berita()
    {
        $data['beritas'] = Berita::orderBy('id','desc')->simplePaginate(5);

        return view('tampil.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function pengumuman()
    {
        $data['informasis'] = Informasi::orderBy('id','desc')->simplePaginate(6);

        // return view('informasis.index', $data);
        return view('content.pengumuman', $data);
    }

    public function tentang()
    {
        $tentang1 = Profile::find(1);
        $tentang2 = Profile::find(2);
        
        return view('content.tentang',[
            'tentang1'=>$tentang1,
            'tentang2'=>$tentang2,
        ]);
    }
    
    public function lokasi()
    {
        return view('content.lokasi');
    }
    
    public function jadwal()
    {
        $jadwal1 = Profile::find(5);
        $jadwal2 = Profile::find(6);
        
        return view('content.jadwal',[
            'jadwal1'=>$jadwal1,
            'jadwal2'=>$jadwal2,
        ]);
    }

    public function galeri()
    {
        $data['galeris'] = Galeri::orderBy('id','desc')->simplePaginate(12);
    
        return view('content.galeri', $data);
    }

    public function show_galeri(Galeri $galeri,$id)
    {
        $galeri = Berita::find($id);

        return view('content.galeri',compact('galeri'));
    }

    public function tabel()
    {
        return view('content.tabel');
    }
    public function isi()
    {
        return view('content.isiberita');
    }
}
