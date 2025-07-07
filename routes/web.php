<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BeritaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Rute untuk Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Rute untuk Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.show');