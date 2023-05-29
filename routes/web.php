<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];
    return view('comic-info.show', compact('comic'));
})->name('comic');

Route::resource('comics', ComicController::class);
