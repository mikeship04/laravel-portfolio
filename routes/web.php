<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/projects', [GeneralController::class, 'projects'])->name('projects');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');


Route::get('/contactUs', [ContactController::class, 'showForm']);
Route::post('/contactUs/send', [ContactController::class, 'sendEmail'])->name('contact.send');
