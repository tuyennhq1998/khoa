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
Route::get('asdd', 'HomeController@sendMail');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', 'HomeController@index');
Route::get('/services', 'HomeController@services');
Route::get('/products', 'HomeController@products');
Route::get('/blog', 'HomeController@blog');
Route::get('/contacts', 'HomeController@contacts');
Route::get('/product/{slug}', 'HomeController@productDetail');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/home', 'AdminController@home')->name('home');
    Route::get('/categories', 'AdminController@categories')->name('categories');
    Route::get('/products', 'AdminController@products')->name('products');
    Route::get('/new-products', 'AdminController@addProducts');
    Route::get('product/{id}', 'AdminController@editProducts');
    Route::get('editservices', 'AdminController@editService')->name('service');
});

//Post
Route::post('home-banner', 'AdminController@postHomeBanner');
Route::post('home-about', 'AdminController@postHomeAbout');
Route::post('post-add-products', 'AdminController@postAddProducts');
Route::post('post-edit-products', 'AdminController@postEditProducts');
Route::post('home-server-content', 'AdminController@home_server_content');

