<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::all();

        return view('divisi', [
            "divisi" => $divisi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodeDivisi = $request->input('Kode_Divisi');
        $pegawai = Pegawai::where('Kode_Divisi', $kodeDivisi)->get();
        $divisi = Divisi::all();
        $divisiTerpilih = Divisi::where('Kode_Divisi', $kodeDivisi)->first();

        return view('divisi', compact('pegawai', 'divisi', 'kodeDivisi', 'divisiTerpilih'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        //
    }
}
