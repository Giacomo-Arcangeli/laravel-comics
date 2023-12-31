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
    $comics = config('comics');
    return view('home' , compact('comics'));
})->name('home');

Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];
    return view('comic' , compact('comic'));
})->name('comic');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');


Route::get('/comics', function () {
    return view('comics');
})->name('comics');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');
