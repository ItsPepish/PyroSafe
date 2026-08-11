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

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->middleware('auth')->name('admin.logout');

Route::get('/admin', [AdminAuthController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

Route::get('/admin/publications', [AdminPublicationController::class, 'index'])->middleware('auth')->name('admin.publications.index');
Route::get('/admin/publications/create', [AdminPublicationController::class, 'create'])->middleware('auth')->name('admin.publications.create');
Route::post('/admin/publications', [AdminPublicationController::class, 'store'])->middleware('auth')->name('admin.publications.store');
Route::get('/admin/publications/{publication}/edit', [AdminPublicationController::class, 'edit'])->middleware('auth')->name('admin.publications.edit');
Route::patch('/admin/publications/{publication}', [AdminPublicationController::class, 'update'])->middleware('auth')->name('admin.publications.update');
Route::delete('/admin/publications/{publication}', [AdminPublicationController::class, 'destroy'])->middleware('auth')->name('admin.publications.destroy');