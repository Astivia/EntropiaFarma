<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;

Route::get('products/{type}', [ProductsController::class, 'index'])->name('products.index');
Route::get('services/{type}', [ServicesController::class, 'index'])->name('services.index');


// Route::resource('Equipment', ProductsController::class);  --> Tabmien funciona pero para CRUD
// Route::get('Equipment', [ProductsController::class, 'Equipment']);
// Route::get('Supplies', [ProductsController::class, 'Supplies']);
// Route::get('Refactions', [ProductsController::class, 'Refactions']);

// Route::get('Maintenance', [ServicesController::class, 'Maintenance']);
// Route::get('Audits', [ServicesController::class, 'Audits']);
// Route::get('Training', [ServicesController::class, 'Training']);
// Route::get('Maquiles', [ServicesController::class, 'Maquiles']);

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
    return view('Servicess.Index');
});
Route::get('products', function () {
    return view('Products.Index');
});