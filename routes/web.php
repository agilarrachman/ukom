<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;

Route::resource('/', PegawaiController::class);
Route::get('/pegawai/pdf/{nip}', [PegawaiController::class, 'exportPDF']);
Route::post('/pegawai/excel/{nip}', [PegawaiController::class, 'exportExcel']);