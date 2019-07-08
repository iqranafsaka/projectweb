<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas1;

class Tugas1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tugas1::all();
        $response = [
            "success" => true,
            "data" => $data,
            "message" => "Berhasil!"
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tugas1();
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->wali_kelas = $request->wali_kelas;
        $data->save();

        $response = [
            "success" => true,
            "data" => $data,
            "message" => "Berhasil!"
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tugas1::findOrFail($id);
        $response = [
            "success" => true,
            "data" => $data,
            "message" => "Berhasil!"
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Tugas1::findOrFail($id);
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->wali_kelas = $request->wali_kelas;
        $data->save();

        $response = [
            "success" => true,
            "data" => $data,
            "message" => "Berhasil!"
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tugas1::findOrFail($id)->delete();
        $response = [
            "success" => true,
            "data" => $data,
            "message" => "Berhasil!"
        ];
        return response()->json($response, 200);
    }
}
