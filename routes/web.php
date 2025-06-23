<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;

Route::resource('/', PegawaiController::class);
Route::get('/pegawai/pdf/{nip}', [PegawaiController::class, 'exportPDF']);
Route::get('/export-excel/{divisi}', [PegawaiController::class, 'exportExcel']);
Route::resource('/presensi', PresensiController::class);
Route::post('/presensi/export', [PresensiController::class, 'exportExcel']);
Route::resource('/divisi', DivisiController::class);