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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('food-shop')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('shop-page', [\App\Http\Controllers\ProductController::class, 'shopList'])
        ->name('food-shop/shop-page');

    Route::get('index', [\App\Http\Controllers\ProductController::class, 'shopIndex'])
        ->name('food-shop/index');

    Route::get('product-details', [\App\Http\Controllers\ProductController::class, 'productDetails'])
        ->name('food-shop/product-details');

    Route::get('contact', [\App\Http\Controllers\ProductController::class, 'contact'])
        ->name('food-shop/contact');

    Route::get('about', [\App\Http\Controllers\ProductController::class, 'about'])
        ->name('food-shop/about');

    Route::get('add-cart', [\App\Http\Controllers\ProductController::class, 'addCart'])
        ->name('food-shop/add-cart')->middleware('auth');

    Route::get('delete-cart', [\App\Http\Controllers\ProductController::class, 'deleteCart'])
        ->name('food-shop/delete-cart')->middleware('auth');

    Route::get('checkout', [\App\Http\Controllers\ProductController::class, 'checkout'])
        ->name('food-shop/checkout')->middleware('auth');

    Route::get('my-account', [\App\Http\Controllers\ProductController::class, 'profile'])
        ->name('food-shop/my-account')->middleware('auth');

    Route::post('make-order', [\App\Http\Controllers\ProductController::class, 'makeOrder'])
        ->name('food-shop/make-order')->middleware('auth');

    Route::post('search', [\App\Http\Controllers\ProductController::class, 'search'])
        ->name('food-shop/search');
});

Route::get('/', [\App\Http\Controllers\ProductController::class, 'shopIndex'])
    ->name('food-shop/index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*Route::get('food-shop/product-details', function () {
    return view('food-shop/product-details');
})->name('food-shop/product-details');*/



