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
    $comics = config('db.comics');
    $headerOptions = config('db.headerOptions');
    $footerMenu = config('db.footerMenu');
    return view('home', compact('comics','headerOptions','footerMenu'));
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');
