<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/kelas', [KelasController::class, 'listKelas']);
Route::get('/kelas/{id}', [KelasController::class, 'detailKelas']);
Route::post('/kelas', [KelasController::class, 'simpanKelas']);
Route::put('/kelas/{id}', [KelasController::class, 'perbaruiKelas']);

Route::get('/siswa', [SiswaController::class, 'listSiswa']);
Route::get('/siswa/{id}', [SiswaController::class, 'detailSiswa']);
Route::post('/siswa', [SiswaController::class, 'simpanSiswa']);
Route::put('/siswa/{id}', [SiswaController::class, 'perbaruiSiswa']);
Route::get('/siswa/{id}/nilai', [SiswaController::class, 'detailNilaiMataPelajaran']);
Route::post('/siswa/{id}/nilai', [SiswaController::class, 'simpanNilaiMataPelajaran']);
