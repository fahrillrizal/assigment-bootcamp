<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiMataPelajaranController;
use App\Http\Controllers\KelasController;

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

Route::prefix('siswa')->group(function () {
    Route::get('/{id}', [SiswaController::class, 'show']);
    Route::get('/', [SiswaController::class, 'index']);
    Route::get('/{id}/detail', [SiswaController::class, 'detail']);
    Route::get('/{id}/nilai', [SiswaController::class, 'nilai']);
    Route::get('/{id}/nilai/detail', [SiswaController::class, 'detailNilai']);
    Route::post('/{id}/nilai', [SiswaController::class, 'storeNilai']);
});

Route::prefix('nilai')->group(function () {
    Route::get('/{id}', [NilaiMataPelajaranController::class, 'show']);
});

Route::prefix('kelas')->group(function () {
    Route::get('/', [KelasController::class, 'index']);
    Route::get('/{id}', [KelasController::class, 'show']);
    Route::post('/', [KelasController::class, 'store']);
    Route::put('/{id}', [KelasController::class, 'update']);
});
