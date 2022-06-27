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
    $comics_array = config('comics');
    $data = [
        'comics' => $comics_array,
    ];
    return view('home', $data);
})->name('home');

Route::get('/comic-{id}', function ($id) {
    $comics_array = collect(config('comics'));
    $current_comic = $comics_array->where('id', $id)->first();

    $data = [
        'comics' => $comics_array,
        'comic' => $current_comic
    ];
    return view('single-comic', $data);
})->name('single-comic');
