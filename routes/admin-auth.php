<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\AdminPengaduanController;
use App\Http\Controllers\Admin\AdminTestimoniController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->as('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('pengaduan', AdminPengaduanController::class);
    Route::put('/pengaduan/{id}/status', [AdminPengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');
    Route::get('pengaduan/{id}', [AdminPengaduanController::class, 'show'])->name('pengaduan.show');

    // Tampilkan form untuk menambah testimoni
    Route::get('/testimoni/create', [AdminTestimoniController::class, 'create'])->name('testimoni.create');

    // Simpan testimoni baru
    Route::post('/testimoni', [AdminTestimoniController::class, 'store'])->name('testimoni.store');



    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
});
