<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /** @use HasFactory<\Database\Factories\PegawaiFactory> */
    use HasFactory;

    protected $table = 'TblPegawai';
    protected $primaryKey = 'NIP';

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'NIP');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'Kode_Divisi');
    }

    protected $casts = [
        'Tanggal_Lahir' => 'date',
    ];
}
