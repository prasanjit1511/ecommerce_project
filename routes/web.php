<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;

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
    return view('welcome');
});
// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/accouts', function () {
    return view('accouts');
});



//Route::get('/products',[ProductController::class,'product'])->name('home');
//  Route::get('/products',[ProductController::class,'product']);
 Route::get('/products',[ProductController::class,'product']);

Route::post('/products',[ProductController::class,'product']);

Route::get('/users',[UserController::class,'login']);

Route::post('/users',[UserController::class,'register']);

// Route::any('/users',[UserController::class,'register']);

Route::get('/admin_products',[ProductController::class,'addProduct']);