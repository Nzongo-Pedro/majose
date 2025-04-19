<?php

use App\Http\Controllers\ProductsController;
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
});

Route::prefix('store/products')
    //   ->middleware('auth.ispeka')
    ->controller(ProductsController::class)
    ->group(function () {
        Route::get('/all-products', 'index')->name('products.index');
        Route::get('/single-product/{id}/{model}', 'show')->name('product.unico');
        Route::get('/product-category/{id}/{category}', 'showByCategory')->name('product.get.category');
        Route::get('/product-subcategory/{id}/{subcategory}', 'showBySubcategory')->name('product.get.subcategory');
        Route::get('/product-create', 'create')->name('product.create');
        Route::post('/product-delete', 'delete')->name('product.delete');
        Route::post('/product-store', 'store')->name('product.store');
        Route::delete('/product-delete', 'destroy')->name('product.destroy');
    });