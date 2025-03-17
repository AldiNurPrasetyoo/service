<?php

namespace App\Http\Controllers;

use App\Models\jenis_kendaraan;

use Illuminate\Http\Request;

class jenis_kendaraan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_kendaraan::get();
        //dd($data)
        return view('JnsKendaraan.tampilJnsKendaraan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('JnsKendaraan.tambahJnsKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new jenis_kendaraan();
        $data->nm_jns_kendaraan= $request->jenis_kendaraan;
        $post = $data->save();
        return redirect('jenis_kendaraan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mencari data berdasarkan id
        $data = jenis_kendaraan::where('id_jenis_kendaraan','=',$id)->get();
        return view('jnsKendaraan.updateJnsKendaraan',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
