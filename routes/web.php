<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminPublicationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [HomeController::class, 'info'])->name('info');

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'authenticate'])->name('admin.auth');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->middleware('auth')->name('admin.logout');

Route::get('/admin', [AdminAuthController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

Route::get('/admin/publications', [AdminPublicationController::class, 'index'])->middleware('auth')->name('admin.publications.index');
Route::get('/admin/publications/create', [AdminPublicationController::class, 'create'])->middleware('auth')->name('admin.publications.create');
Route::post('/admin/publications', [AdminPublicationController::class, 'store'])->middleware('auth')->name('admin.publications.store');
