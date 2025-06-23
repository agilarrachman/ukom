<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('TblPegawai', function (Blueprint $table) {
            $table->string('NIP', 5)->unique();
            $table->string('Nama');
            $table->string('Alamat');
            $table->date('Tanggal_Lahir');
            $table->string('Kode_Divisi');
            $table->foreign('Kode_Divisi')->references('Kode_Divisi')->on('TblDivisi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TblPresensi');
    }
};
