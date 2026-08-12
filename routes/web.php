<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminPublicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [PublicationController::class, 'index'])->name('publications.index');
Route::get('/info/{publication:slug}', [PublicationController::class, 'show'])->name('publications.show');

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'authenticate'])->name('admin.auth');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::get('/publications', [AdminPublicationController::class, 'index'])->name('publications.index');
    Route::get('/publications/create', [AdminPublicationController::class, 'create'])->name('publications.create');
    Route::post('/publications', [AdminPublicationController::class, 'store'])->name('publications.store');
    Route::get('/publications/{publication}/edit', [AdminPublicationController::class, 'edit'])->name('publications.edit');
    Route::patch('/publications/{publication}', [AdminPublicationController::class, 'update'])->name('publications.update');
    Route::delete('/publications/{publication}', [AdminPublicationController::class, 'destroy'])->name('publications.destroy');
});