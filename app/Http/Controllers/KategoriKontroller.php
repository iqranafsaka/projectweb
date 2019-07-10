<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriKontroller extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::orderBy('created_at', 'desc')->get();
        return view('backend.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|unique:kategoris']);

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->slug = str_slug($request->nama, '-');
        $kategori->save();

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil Menyimpan data <b>'.$kategori->nama.'</b>'
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.edit', compact('kategori'));
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
        $request->validate(['nama' => 'required|unique:kategoris']);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->slug = str_slug($request->nama, '-');
        $kategori->save();

        Session::flash('flash_notification', [
            'level' => 'warning',
            'message' => 'Berhasil Mengedit data <b>'.$kategori->nama.'</b>'          
        ]);
        return redirect()->route('kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori2 = Kategori::findOrFail($id);
        $kategori = Kategori::findOrFail($id)->delete();
        if (!Kategori::destroy($id)) return redirect()->back();
        Session::flash('flash_notification', [
            'level' => 'danger',
            'message' => 'Berhasil Menghapus data <b>'.$kategori2->nama.'</b>'
        ]);

        return redirect()->route('kategori.index');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
