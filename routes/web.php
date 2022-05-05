<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('/comics', function () {
    $cards = config('cards');
    return view('guest.comics', ['cards' => $cards ]);
})->name('comics-page');

Route::get('/comics/{index}', function ($index) {
    $cards = config('cards');
    if(is_numeric($index) && $index >= 0 && $index < count($cards)){
        return view('guest.comic', ['card' => $cards[$index] ]);
    } else{
        abort(404);
    }
})->name('comic-page-detail');

