<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// main routes
Route::get('/', [AppController::class, 'welcome'])->name('welcome');
Route::get('/index', [AppController::class, 'index'])->name('index');
Route::get('/service', [AppController::class, 'service'])->name('service');
// Route::get('/details', [AppController::class, 'news'])->name('newsDetails');
// terms and condition routes
Route::get('/terms', [AppController::class, 'terms'])->name('terms');
Route::get('/privacy', [AppController::class, 'privacy'])->name('privacy');
// admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
// admin authentification routes
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
// news, projects and testimonial routes
Route::resources([
    'news' => NewsController::class,
    'projects' => ProjectsController::class,
    'testimonial' => TestimonialController::class,
    'messages' => MessagesController::class,
]);
