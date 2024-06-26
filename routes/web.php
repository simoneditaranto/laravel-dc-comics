<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [ComicController::class, 'index'])->name('home');
// Route::get('/comics', [ComicController::class, 'show'])->name('comic.show');

// posso creare direttamente una rotta che si collega al 'resource Controlloer'
// in automatico le sue funzioni sono STANDARDIZZATE
Route::resource('comics', ComicController::class);

Route::get('/', [PageController::class, 'home'])->name('home');

