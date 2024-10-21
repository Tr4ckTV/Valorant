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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/game', function () {
    return view('game');
})->name('game');

Route::get('/game/custom', function () {
    return view('Games.custom');
})->name('custom');

Route::get('/game/random', function () {
    return view('Games.random');
})->name('random');

Route::get('/game/roulette', function () {
    return view('Games.roulette');
})->name('roulette');
