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
    $navbar_links = config('navbar');
    return view('home');
})->name('comics');


Route::get('/characters', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('characters');


Route::get('/movies', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('movies');


Route::get('/tv', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('tv');


Route::get('/games', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('games');


Route::get('/collectibles', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('collectibles');


Route::get('/videos', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('videos');


Route::get('/fans', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('fans');


Route::get('/news', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('news');


Route::get('/shop', function () {
    $navbar_links = config('navbar');
    return view('home');
})->name('shop');
