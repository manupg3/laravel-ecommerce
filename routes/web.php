<?php

use App\Http\Controllers\ProductController;
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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/tienda', [ProductController::class, 'index'])->name('tienda');

Route::get('/', [ProductController::class, 'productHomeCards'])->name('home');;

Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('createProduct');

Route::post('/saveProduct' , [ProductController::class, 'saveProduct'])->name('saveProduct');

Route::get('/editProduct/{product}' , [ProductController::class, 'editProduct'])->name('editProduct');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
