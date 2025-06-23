<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    /** @use HasFactory<\Database\Factories\DivisiFactory> */
    use HasFactory;

    protected $table = 'TblDivisi';
    protected $primaryKey = 'Kode_Divisi';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'Kode_Divisi');
    }
}
