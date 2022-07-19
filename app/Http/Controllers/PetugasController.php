<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['penumpangs'] = Penumpang::orderBy('id','desc')->simplePaginate(5);
        $data['penumpangs'] = DB::table('penumpangs')->join('pesanans', 'pesanans.id', '=', 'penumpangs.pesanan_id')->simplePaginate(10);
    
        return view('petugas.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);

        Penumpang::create($request->all());

        return redirect()->route('petugas.index')
            ->with('success', 'Data penumpang telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penumpang $penumpang)
    {
        return view('petugas.show', compact('penumpang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penumpang $penumpang, $id)
    {
        $penumpang = Penumpang::find($id);

        return view('petugas.edit', ["penumpang"=>$penumpang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penumpang $penumpang)
    {
        $request->validate([
           'nama' => 'required',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);
        $penumpang->update($request->all());

        return redirect()->route('petugas.index')
            ->with('success', 'Data penumpang telah diubah');
    }

    /**
     * Update Lunas Pembayaran.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lunas(Penumpang $penumpang, $id)
    {
        Penumpang::where('id', $id)->update(['lunas' => 1]);

        return redirect()->route('petugas.index')
            ->with('success', 'Verifikasi pembayaran berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penumpang $penumpang, $id)
    {
        $penumpang = Penumpang::find($id);
        $penumpang->delete();

        return redirect()->route('petugas.index')
            ->with('success', 'Data penumpang telah dihapus');
    }
}
