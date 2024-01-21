<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/kelas', [KelasController::class, 'listKelas']);
Route::get('/kelas/{id}', [KelasController::class, 'detailKelas']);
Route::post('/kelas', [KelasController::class, 'simpanKelas']);
Route::put('/kelas/{id}', [KelasController::class, 'perbaruiKelas']);

Route::get('/siswa', [SiswaController::class, 'listSiswa']);
Route::get('/siswa/{id}', [SiswaController::class, 'detailSiswa']);
Route::get('/siswa/{id}/nilai', [SiswaController::class, 'detailNilaiMataPelajaran']);
Route::post('/siswa/{id}/nilai', [SiswaController::class, 'simpanNilaiMataPelajaran']);
