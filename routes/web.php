<?php

use App\Http\Controllers\HomeController;
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


Route::match( [ 'get', 'post' ], '/', [ HomeController::class, 'index' ] )->name( 'home' );
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

Route::match( [ 'get', 'post' ], '/account', function () {
    echo 'Account';
} );

Route::match( [ 'get', 'post' ], '/account/wish-lust/{user_login}', function ( $user_login ) {
    echo 'Account wish-list: ' . $user_login;
} );

Route::get( '/faq', function () {
    echo 'FAQ page';
} );

Route::get( '/about', function () {
    echo 'About page';
} );
