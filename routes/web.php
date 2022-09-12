<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;

// main routes
Route::get('/', [AppController::class,'welcome'])->name('welcome');
Route::get('/index', [AppController::class,'index'])->name('index');
// terms and condition routes
Route::get('/terms',[AppController::class,'terms'])->name('terms');
Route::get('/privacy',[AppController::class,'privacy'])->name('privacy');
// contact us routes
Route::post('/contact',[MessagesController::class,'store'])->name('contact');
