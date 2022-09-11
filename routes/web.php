<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class,'index1'])->name('main');
Route::get('/index', [AppController::class,'index'])->name('main1');
Route::get('/terms',[AppController::class,'terms'])->name('terms');
Route::get('/privacy',[AppController::class,'privacy'])->name('privacy');
