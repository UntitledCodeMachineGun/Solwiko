<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialController;






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

Route::get('/', [MainController::class, "index"])->name('index');

Route::group(['prefix' => 'cart'], function() {
    Route::post('/add/{id}', [CartController::class, "cartAdd"])->name('cart-add');

    Route::group([
        'middleware' => 'cart_not_empty',
        
    ], function() {
        Route::get('/', [CartController::class, "cart"])->name('cart');
        Route::post('/remove/{id}', [CartController::class, "cartRemove"])->name('cart-remove');
        Route::get('/submit-order', [CartController::class, "submitOrder"])->name('submit-order');
        Route::post('/submit-order', [CartController::class, "confirmOrder"])->name('confirm-order');
    });
});

Route::get('/search', [MainController::class, "search"])->name('search');
Route::get('/contact', [MainController::class, "contact"])->name('contact');
Route::get('/info', [MainController::class, "info"])->name('info');
Route::get('/user', [MainController::class, "user"])->name('user');

Route::get('/login/google', [SocialController::class, 'googleRedirect'])->name('google');
Route::get('/login/google/callback', [SocialController::class, 'loginWithGoogle']);



Route::get('/blog/{news?}', [MainController::class, "blog"])->name('news');

Auth::routes();
Route::middleware(['auth'])->group(function() {
Route::group([
        'prefix' => 'person',
        'namespace' => 'Person',
        'as' => 'person.',
    ], function(){
        Route::get('/orders', [App\Http\Controllers\Person\OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}', [App\Http\Controllers\Person\OrderController::class, 'show'])->name('orders.show');
    });
    Route::group([
        'namespace' => 'App\Http\Controllers\Admin',
        'prefix' => 'admin',
    ], function()
    {
        Route::group([
            'middleware' => 'is_admin'
        ], function()
        {
            Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('home');
            Route::get('/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
        });
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('news', NewsController::class);
    });
});

Route::get('/auth/google', [SocialController::class, "googleRedirect"])->name('google');
Route::get('/auth/google/callback', [SocialController::class, "loginWithGoogle"]);

Route::get('/{category}', [MainController::class, "category"])->name('category');
Route::get('/{category}/{product}', [MainController::class, "product"])->name('product');