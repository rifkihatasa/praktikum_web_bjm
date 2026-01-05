<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/kasir', function () {
    return view('kasir.dashboard');
});

// Route Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admin']);
    Route::get('/barang', [App\Http\Controllers\AdminController::class, 'barang']);
    Route::get('/barang/tambah', [App\Http\Controllers\AdminController::class, 'tambah_barang']);
    Route::post('/barang/simpan', [App\Http\Controllers\AdminController::   class, 'simpan_barang']);
    Route::get('/barang/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit_barang']);
    Route::post('/barang/update/{id}', [App\Http\Controllers\AdminController::class, 'update_barang']);
    Route::get('/barang/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_barang']);
    Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index']);
    Route::get('/laporan/cetak_barang', [App\Http\Controllers\LaporanController
::class, 'cetak_barang']);
});