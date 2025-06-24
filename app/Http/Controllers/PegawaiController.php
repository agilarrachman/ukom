<?php

namespace App\Http\Controllers;

use App\Exports\PegawaiExport;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
        $nip = $request->input('nip');
        $pegawai = Pegawai::where('NIP', $nip)->first();

        return view('index', compact('pegawai'));
    }

    public function exportPDF($nip)
    {
        $pegawai = Pegawai::with('divisi')->where('NIP', $nip)->first();

        if (!$pegawai) {
            return redirect('/')->with('error', 'Pegawai tidak ditemukan');
        }

        $pdf = Pdf::loadView('pdf.pegawai', compact('pegawai'));
        return $pdf->download('Data-Pegawai-' . $pegawai->NIP . '.pdf');
    }

    public function exportExcel($nip)
    {
        return Excel::download(new PegawaiExport($nip), 'Pegawai-' . $nip . '.xlsx');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
