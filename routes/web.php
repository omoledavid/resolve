<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('connect/{id}', [SiteController::class, 'connect'])->name('connect');
Route::get('connection', [SiteController::class, 'connection'])->name('connection');
Route::get('access/{id}', [SiteController::class, 'access'])->name('access');
Route::post('form', [SiteController::class, 'submit'])->name('form.submit');
