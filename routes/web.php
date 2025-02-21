<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\P2dbController;

// Route untuk semua pengguna (tanpa login)
Route::get('/', [MainController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses'])->name('login.proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProses']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/export-excel', [P2dbController::class, 'exportExcel'])->name('p2db.exportExcel');
// Route untuk pengguna yang login (tanpa memerlukan role tertentu)
Route::middleware('auth')->group(function () {
    Route::get('/p2db/create', [P2dbController::class, 'create'])->name('p2db.create');
    Route::post('/p2db', [P2dbController::class, 'store'])->name('p2db.store');
});

// Route untuk admin (hanya bisa diakses oleh pengguna dengan role 'admin')
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/p2db/export-csv', [P2dbController::class, 'exportCsv'])->name('p2db.exportCsv');
    Route::get('/p2db', [P2dbController::class, 'index'])->name('p2db.index');
    Route::get('/p2db/{id}/edit', [P2dbController::class, 'edit'])->name('p2db.edit');
    Route::put('/p2db/{id}', [P2dbController::class, 'update'])->name('p2db.update');
    Route::get('/p2db/list', [P2dbController::class, 'list'])->name('p2db.list');
    Route::delete('/p2db/{id}', [P2dbController::class, 'destroy'])->name('p2db.destroy');
});