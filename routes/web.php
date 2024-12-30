<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TestimoniController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('portfolio.app');
})->where('any', '.*');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang_kami');

    Route::resource('pengaduan', PengaduanController::class);
    Route::put('/pengaduan/{id}/status', [PengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');
    Route::get('pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');

    // Tampilkan form untuk menambah testimoni
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');

    // Simpan testimoni baru
    Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {


    Route::get('tentang-kami', function () {
        return view('admin.tentang_kami');
    })->name('admin.tentang_kami');

    Route::get('profile', function () {
        return view('admin.profile.edit');
    })->name('admin.profile.edit');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
