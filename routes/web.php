<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class,'index'])->name('main');
// Route::get('/about',[AppController::class,'about'])->name('about');
// Route::get('/services',[AppController::class,'services'])->name('services');
// Route::get('/team',[AppController::class,'team'])->name('team');
// Route::get('/projects',[AppController::class,'projects'])->name('projects');
// Route::get('/contact',[AppController::class,'contact'])->name('contact');
// Route::get('/news',[AppController::class,'news'])->name('news');
Route::get('/terms',[AppController::class,'terms'])->name('terms');
Route::get('/privacy',[AppController::class,'privacy'])->name('privacy');
