<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User;
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


Route::match( [ 'get', 'post' ], '/', function () {
    return view( 'welcome' );
} )
    ->name( 'home' );

Route::match( [ 'get', 'post' ], '/store', [ HomeController::class, 'store' ] )->name( 'store' );

Route::match( [ 'get', 'post' ], '/shop', function () {
    echo 'Shop';
} );

Route::get( '/product/{product_slug}', function ( string $product_slug ) {
    echo 'Single product ' . $product_slug;
} );

Route::match( [ 'get', 'post' ], '/shop/{category_name}', function ( $category_name ) {
    echo 'Shop category name: ' . $category_name;
} );

Route::match( [ 'get', 'post' ], '/shop/tags/{tags_name}', function ( $tag_name ) {
    echo 'Shop tag name: ' . $tag_name;
} );

Route::match( [ 'get', 'post' ], '/cart', function () {
    echo 'Cart';
} );

Route::match( [ 'get', 'post' ], '/checkout', function () {
    echo 'Checkout';
} );

Route::get( '/thanks-for-order', function () {
    echo 'Thanks for your order';
} );

Route::match( [ 'get', 'post' ], '/account', [ User::class, 'index' ] );

Route::match( [ 'get', 'post' ], '/account/wish-lust/{user_login}', function ( $user_login ) {
    echo 'Account wish-list: ' . $user_login;
} );

Route::get( '/faq', function () {
    echo 'FAQ page';
} );

Route::get( '/about', function () {
    echo 'About page';
} );

Route::prefix( 'admin' )->name( 'admin.' )->group( function () {
    Route::prefix( '/product' )->name( 'product.' )->group( function () {
        Route::post( '/store', [ ProductController::class, 'store' ] )->name( 'store' );
        Route::post( '/destroy', [ ProductController::class, 'destroy' ] )->name( 'destroy' );
    } );


    Route::prefix( '/category' )->name( 'category.' )->group( function () {
        Route::get( '/', [ CategoryController::class, 'index' ] )->name( 'index' );
        Route::post( '/store', [ CategoryController::class, 'store' ] )->name( 'store' );
        Route::get( '/destroy/{id}', [ CategoryController::class, 'destroy' ] )->name( 'destroy' );
        Route::get( '/show/{category}', [ CategoryController::class, 'show' ] )->name( 'show' );
        Route::post( '/edit/{category}', [ CategoryController::class, 'edit' ] )->name( 'edit' );
    } );
} );


