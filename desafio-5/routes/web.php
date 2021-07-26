<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('language.portuguese')->group(function () {
  Route::get('/', [SiteController::class, 'home'])->name('home');
  Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
  Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
  Route::get('/seja-parceiro', [SiteController::class, 'seja_parceiro'])->name('seja_parceiro');
  Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
  Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
  Route::get('/blog/{slug}', [SiteController::class, 'blog_integra'])->name('blog_integra');
  Route::get('/descontos', [SiteController::class, 'descontos'])->name('descontos');
  Route::get('/descontos/{slug}', [SiteController::class, 'descontos_integra'])->name('descontos_integra');
});

Route::middleware('language.english')->prefix('en')->group(function () {
  Route::get('/en', [SiteController::class, 'home'])->name('home');
  Route::get('/about-us', [SiteController::class, 'sobre'])->name('sobre');
  Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
  Route::get('/be-a-partner', [SiteController::class, 'seja_parceiro'])->name('seja_parceiro');
  Route::get('/contact', [SiteController::class, 'contato'])->name('contato');
  Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
  Route::get('/blog/{slug}', [SiteController::class, 'blog_integra'])->name('blog_integra');
  Route::get('/discounts', [SiteController::class, 'descontos'])->name('descontos');
  Route::get('/discounts/{slug}', [SiteController::class, 'descontos_integra'])->name('descontos_integra');
});
