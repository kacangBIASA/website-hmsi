<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DepartemenController;

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
    return view('home.index');
});

// Admin
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Berita (Admin)
    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{berita:id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{berita:id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{berita:id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

    // Artikel (Admin)
    Route::get('/artikel', [ArticleController::class, 'adminIndex'])->name('admin.artikel.index');
    Route::get('/artikel/create', [ArticleController::class, 'create'])->name('admin.artikel.create');
    Route::post('/artikel', [ArticleController::class, 'store'])->name('admin.artikel.store');
    Route::get('/artikel/{artikel:id}/edit', [ArticleController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/{artikel:id}', [ArticleController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/{artikel}', [ArticleController::class, 'destroy'])->name('admin.artikel.destroy');

    // Event (Admin)
    Route::get('/event', [EventController::class, 'adminIndex'])->name('admin.event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('admin.event.create');
    Route::post('/event', [EventController::class, 'store'])->name('admin.event.store');
    Route::get('/event/{event:id}/edit', [EventController::class, 'edit'])->name('admin.event.edit');
    Route::put('/event/{event:id}', [EventController::class, 'update'])->name('admin.event.update');
    Route::delete('/event/{event:id}', [EventController::class, 'destroy'])->name('admin.event.destroy');

    // Pengurus (Admin)
    Route::get('/pengurus', [PengurusController::class, 'adminIndex'])->name('admin.pengurus.index');
    Route::get('/pengurus/create', [PengurusController::class, 'create'])->name('admin.pengurus.create');
    Route::post('/pengurus', [PengurusController::class, 'store'])->name('admin.pengurus.store');
    Route::get('/pengurus/{pengurus:id}/edit', [PengurusController::class, 'edit'])->name('admin.pengurus.edit');
    Route::put('/pengurus/{pengurus:id}', [PengurusController::class, 'update'])->name('admin.pengurus.update');
    Route::delete('/pengurus/{pengurus:id}', [PengurusController::class, 'destroy'])->name('admin.pengurus.destroy');

    // Departemen (Admin)
    Route::get('/departemen', [DepartemenController::class, 'index'])->name('admin.departemen.index');
    Route::get('/departemen/create', [DepartemenController::class, 'create'])->name('admin.departemen.create');
    Route::post('/departemen', [DepartemenController::class, 'store'])->name('admin.departemen.store');
    Route::get('/departemen/{departemen:id}/edit', [DepartemenController::class, 'edit'])->name('admin.departemen.edit');
    Route::put('/departemen/{departemen:id}', [DepartemenController::class, 'update'])->name('admin.departemen.update');
    Route::delete('/departemen/{departemen:id}', [DepartemenController::class, 'destroy'])->name('admin.departemen.destroy');
});
// Admin

// PUBLIC
// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// pengurus
Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus.index');

// Rute untuk Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Rute untuk Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.show');

//event
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/{event:slug}', [EventController::class, 'show'])->name('event.show');

// about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
// PUBLIC
