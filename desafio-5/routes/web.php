<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
