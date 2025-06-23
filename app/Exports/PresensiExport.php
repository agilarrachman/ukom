<?php

namespace App\Exports;

use App\Models\Presensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PresensiExport implements FromView
{
    protected $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function view(): View
    {
        $presensi = Presensi::whereDate('created_at', $this->date)->get();
        return view('excel.presensi', [
            'presensi' => $presensi,
            'date' => $this->date
        ]);
    }
}
