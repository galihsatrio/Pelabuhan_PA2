<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['beritas'] = Berita::orderBy('id','desc')->simplePaginate(5);

        // return view('beritas.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 5);

        return view('beritas.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beritas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'tgl_berita' => 'required',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
        //     'description' => 'required',
        //     'sumber' => 'required',
        // ]);
        // $path = $request->file('image')->store('public/images');


        // Berita::create([
        //     'title' => $request->title,
        //     'tgl_berita' => $request->tgl_berita,
        //     'image' => basename($path),
        //     'sumber' => $request->sumber,
        //     'description' => $request->description
        // ]);
        $request->validate([
            'title' => 'required',
            'tgl_berita' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
            'description' => 'required',
            'sumber' => 'required',
        ]);

        $foto = $request->file('image');
        
        $path = $foto->store('product', 'public');
        
        $foto->move(public_path('foto/product'), $path);

        
        $berita = new Berita();
        $berita->title = $request->title;
        $berita->tgl_berita = $request->tgl_berita;
        $berita->description = $request->description;
        $berita->sumber = $request->sumber;
        $berita->image = basename($path);
        $berita->save();
        
        return redirect()->route('beritas.index')
                        ->with('success','Data berita sudah berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('beritas.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('beritas.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // $request->validate([
        //     'title' => 'required',
        //     'tgl_berita' => 'required',
        //     'description' => 'required',
        //     'sumber' => 'required',
        // ]);
        
        // $berita = Berita::find($id);
        // if($request->hasFile('image')){
        //     $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
        //     ]);
        //     $path = $request->file('image')->store('public/images');
        //     $berita->image = $path;
        // }
        // $berita->title = $request->title;
        // $berita->tgl_berita = $request->tgl_berita;
        // $berita->description = $request->description;
        // $berita->sumber = $request->sumber;
        // $berita->save();
        
        $berita = Berita::find($id);
        $berita -> title = $request->title;
        $berita -> tgl_berita = $request->tgl_berita;
        $berita -> description = $request->description;
        $berita -> sumber = $request->sumber;
         if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
            ]);
            $foto = $request->file('image');
        
            $path = $foto->store('product', 'public');

            $foto->move(public_path('foto/product'), $path);

            $berita -> image = basename($path);
        }
        $berita -> save();

        

        return redirect()->route('beritas.index')
                        ->with('success','Data berita sudah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
    
        return redirect()->route('beritas.index')
                        ->with('success','Data berita sudah berhasil dihapus');
    }
}
