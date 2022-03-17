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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('index');
})->name('dashboard');

Route::get('category', function () {
    return view('category');
});

Route::get('index', function () {
    return view('index');
});

Route::get('categories_laptop', function () {
    return view('categories_laptop');
});

Route::get('categories_phone', function () {
    return view('categories_phone');
});


