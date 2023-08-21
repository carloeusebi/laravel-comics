<?php

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
    return view('home');
})->name('home');

Route::prefix('/comics')->name('comics')->group(function () {
    Route::get('/comics', function () {
        $comics = config('comics');
        $shop_items = config('shop');
        return view('comics.list', compact('comics', 'shop_items'));
    });
});


Route::get('/characters', function () {
    return view('home');
})->name('characters');


Route::get('/movies', function () {
    return view('home');
})->name('movies');


Route::get('/tv', function () {
    return view('home');
})->name('tv');


Route::get('/games', function () {
    return view('home');
})->name('games');


Route::get('/collectibles', function () {
    return view('home');
})->name('collectibles');


Route::get('/videos', function () {
    return view('home');
})->name('videos');


Route::get('/fans', function () {
    return view('home');
})->name('fans');


Route::get('/news', function () {
    return view('home');
})->name('news');


Route::get('/shop', function () {
    return view('home');
})->name('shop');
