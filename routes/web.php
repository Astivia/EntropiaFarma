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
    return view('Index');
});

Route::get('home', function () {
    return view('Index');
});

Route::get('about', function () {
    return view('About');
});
Route::get('services', function () {
    return view('Services');
});
Route::get('products', function () {
    return view('Products');
});