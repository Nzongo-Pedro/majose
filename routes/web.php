<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomePageController;


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

Route::get('/dashboard', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::prefix('store/products')
    ->middleware('auth')
    ->controller(ProductsController::class)
    ->group(function () {
        Route::get('/all-products', 'index')->name('products.index');
        Route::get('/single-product/{id}/{model}', 'show')->name('product.show');
        Route::get('/product-category/{id}/{category}', 'showByCategory')->name('product.get.category');
        Route::get('/product-subcategory/{id}/{subcategory}', 'showBySubcategory')->name('product.get.subcategory');
        Route::get('/product-create', 'create')->name('product.create');
        Route::post('/product-store', 'store')->name('product.store');
        Route::delete('/product-delete', 'destroy')->name('product.destroy');
    });


Route::get('/', [HomePageController::class, 'index']);
Route::get('/pagina-principal', [HomePageController::class, 'index'])->name('site.index');



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');