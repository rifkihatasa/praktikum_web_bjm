<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Redirect Awal
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Route Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'admin']);

    Route::get('/barang', [AdminController::class, 'barang']);
    Route::get('/barang/tambah', [AdminController::class, 'tambah_barang']);
    Route::post('/barang/simpan', [AdminController::class, 'simpan_barang']);
    Route::get('/barang/edit/{id}', [AdminController::class, 'edit_barang']);
    Route::post('/barang/update/{id}', [AdminController::class, 'update_barang']);
    Route::get('/barang/delete/{id}', [AdminController::class, 'delete_barang']);

    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::get('/laporan/cetak_barang', [LaporanController::class, 'cetak_barang']);

});

/*
|--------------------------------------------------------------------------
| Route Kasir
|--------------------------------------------------------------------------
*/
Route::prefix('kasir')->group(function () {

    Route::get('/', [KasirController::class, 'index']);

    Route::get('/barang', [KasirController::class, 'barang']);

    Route::get('/transaksi', [KasirController::class, 'transaksi'])
        ->name('kasir.transaksi');

    Route::post('/transaksi', [KasirController::class, 'transaksiStore'])
        ->name('kasir.transaksi.store');
});

