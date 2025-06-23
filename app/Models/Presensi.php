<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    /** @use HasFactory<\Database\Factories\PresensiFactory> */
    use HasFactory;

    protected $table = 'TblPresensi';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'NIP');
    }
}
