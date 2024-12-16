<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/projects', [GeneralController::class, 'projects'])->name('projects');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');





