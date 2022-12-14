<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', 'OrderController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    //return view('order', ['name' => 'Jeszy']);
    //return View::make('order', ['name' => 'Jeszy']);
    return view('order')
            ->with('customer_name', 'Victoria')
            ->with('product_name', 'Tarpaulin');
});
