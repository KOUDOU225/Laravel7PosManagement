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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/order', 'OrderController');//order.index
Route::resource('/products', 'ProductController');//product.index
Route::resource('/suppliers', 'SupplierController');//suppliers.index
Route::resource('/companies', 'CompanyController');//companies.index
Route::resource('/users', 'UserController');//user.index
Route::resource('/transactions', 'TransactionController');
Route::resource('user', 'UserController');
