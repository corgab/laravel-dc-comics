<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicbookController;

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

// Route::get('/comicsbooks', [ComicbookController::class, 'index'])->name('comicsbooks.index');
// Route::get('/comicsbooks/create', [ComicbookController::class, 'create'])->name('comicsbooks.create');
// Route::get('/comicsbooks/{comicsbook}', [ComicbookController::class, 'show'])->name('comicsbooks.show');
// Route::post('/comicsbooks', [ComicbookController::class, 'store'])->name('comicsbooks.store');

Route::resource('comicsbooks', ComicbookController::class);
