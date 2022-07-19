<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $data['galeris'] = Galeri::orderBy('id','desc')->simplePaginate(5);
    
        return view('galeris.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeris.create');
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
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
        // ]);
        // $path = $request->file('image')->store('public/images');
        // $galeri = new Galeri();
        // $galeri->title = $request->title;
        // $galeri->image = $path;
        // $galeri->save();
     

        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
            'description' => 'required',
        ]);

        $foto = $request->file('image');
        
        $path = $foto->store('product', 'public');
        
        $foto->move(public_path('foto/product'), $path);

        // Galeri::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image' => basename($path)
        // ]);

        $galeri = new Galeri();
        $galeri->title = $request->title;
        $galeri->description = $request->description;
        $galeri->image = basename($path);
        $galeri->save();
        
        return redirect()->route('galeris.index')
                        ->with('success','Data galeri sudah berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        return view('galeris.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('galeris.edit',compact('galeri'));
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
        // ]);
        
        // $galeri = Galeri::find($id);
        // if($request->hasFile('image')){
        //     $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
        //     ]);
        //     $path = $request->file('image')->store('public/images');
        //     $galeri->image = $path;
        // }
        // $galeri->title = $request->title;
        // $galeri->save();

        $galeri = Galeri::find($id);
         if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
            ]);
            $foto = $request->file('image');
        
            $path = $foto->store('product', 'public');

            $foto->move(public_path('foto/product'), $path);

            $galeri-> image = basename($path);
        }
        $galeri -> description = $request->description;
        $galeri->save();

        return redirect()->route('galeris.index')
                        ->with('success','Data galeri sudah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
    
        return redirect()->route('galeris.index')
                        ->with('success','Data galeri sudah berhasil dihapus');
    }
}
