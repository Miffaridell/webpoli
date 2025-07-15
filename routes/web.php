<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.visi and misi');
Route::get('/sejarah', [SejarahController::class, 'index'])->name('informasi.sejarah');


Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/tables', function () {
    return view('admin.tables');
});
Route::get('/utilities-animation', function () {
    return view('admin.utilities-animation');
});
Route::get('/utilities-border', function () {
    return view('admin.utilities-border');
});
Route::get('/color', function () {
    return view('admin.utilities-color');
});
Route::get('/other', function () {
    return view('admin.utilities-other');
});
// Route::get('/admin/sejarah/edit', [SejarahController::class, 'edit'])->name('sejarah.edit');
// Route::post('/admin/sejarah/update', [SejarahController::class, 'update'])->name('sejarah.update');

// Route::get('/informasi/create', [InformasiController::class, 'create'])->name('informasi.create');
// Route::post('/informasi', [InformasiController::class, 'store'])->name('informasi.store');
// Route::get('/informasi/{id}/edit', [InformasiController::class, 'edit'])->name('informasi.edit');
// Route::put('/informasi/{id}', [InformasiController::class, 'update'])->name('informasi.update');
// Route::delete('/informasi/{id}', [InformasiController::class, 'destroy'])->name('informasi.destroy');
// Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// // Tambahan untuk admin (opsional)
// Route::prefix('admin')->group(function () {
//     Route::get('/layanan/create', [LayananController::class, 'create'])->name('layanan.create');
//     Route::post('/layanan/store', [LayananController::class, 'store'])->name('layanan.store');
//     Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
//     Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');
//     Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');
// });