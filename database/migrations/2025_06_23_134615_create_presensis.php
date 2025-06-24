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
        Schema::create('TblPresensi', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->foreign('NIP')->references('NIP')->on('TblPegawai')->onDelete('cascade');
            $table->date('Tanggal');
            $table->time('Jam_Masuk');
            $table->time('Jam_Pulang');
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
