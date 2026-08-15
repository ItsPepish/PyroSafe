<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminEstablishmentController;
use App\Http\Controllers\AdminPublicationController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [PublicationController::class, 'index'])->name('publications.index');
Route::get('/info/{publication:slug}', [PublicationController::class, 'show'])->name('publications.show');
Route::get('/reporte', [ReportController::class, 'create'])->name('reports.create');
Route::post('/reporte', [ReportController::class, 'store'])->middleware('throttle:3,60')->name('reports.store');
Route::get('/establecimientos', [EstablishmentController::class, 'index'])->name('establishments.index');
Route::get('/acerca-de', [HomeController::class, 'acerca'])->name('acerca');

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

    Route::get('/reports', [AdminReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/{report}', [AdminReportController::class, 'show'])->name('reports.show');
    Route::patch('/reports/{report}/status', [AdminReportController::class, 'updateStatus'])->name('reports.update-status');

    Route::get('/establishments', [AdminEstablishmentController::class, 'index'])->name('establishments.index');
    Route::get('/establishments/create', [AdminEstablishmentController::class, 'create'])->name('establishments.create');
    Route::post('/establishments', [AdminEstablishmentController::class, 'store'])->name('establishments.store');
    Route::get('/establishments/{establishment}/edit', [AdminEstablishmentController::class, 'edit'])->name('establishments.edit');
    Route::patch('/establishments/{establishment}', [AdminEstablishmentController::class, 'update'])->name('establishments.update');
    Route::delete('/establishments/{establishment}', [AdminEstablishmentController::class, 'destroy'])->name('establishments.destroy');
});
