<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('/dashboard-admin', DashboardController::class);
    Route::get('/absensi', [AbsensiController::class, 'absenHarian']);
    Route::post('/create-absensi', [AbsensiController::class, 'createAbsen']);
    Route::get('/absensi/{id}', [AbsensiController::class, 'absensiDetail']);
    Route::put('/edit-data-guru/{id}', [DataGuruController::class, 'editDataGuru']);
    Route::put('/hapus-guru/{id}', [DataGuruController::class, 'hapusGuru']);
    Route::resource('/data-guru', DataGuruController::class);
    Route::resource('/laporan-absensi', LaporanController::class);
    Route::get('/tambah-guru', [DataGuruController::class, 'tambahguru']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard-guru', [DashboardController::class, 'dashboardUser']);
    Route::get('/absensi-harian', [AbsensiController::class, 'absenHarianGuru']);
    Route::get('/absensi-harian/{id}', [AbsensiController::class, 'absenHarianGuruDetail']);
    Route::post('/create-absen-guru', [AbsensiController::class, 'createAbsenGuru']);
    Route::post('/keterangan-ketidakhadiran', [AbsensiController::class, 'keteranganKetidakhadiran']);
    Route::put('/keluar-absensi/{id}', [AbsensiController::class, 'keluarAbsen']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
