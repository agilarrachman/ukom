<?php

namespace App\Exports;

use App\Models\Pegawai;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PegawaiExport implements FromView
{
    protected $nip;

    public function __construct($nip)
    {
        $this->nip = $nip;
    }

    public function view(): View
    {
        $pegawai = Pegawai::with('divisi')->where('NIP', $this->nip)->first();
        return view('excel.pegawai', [
            'pegawai' => $pegawai
        ]);
    }
}
