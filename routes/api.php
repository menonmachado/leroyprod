<?php

use Illuminate\Http\Request;
use App\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Routing details for '/api/product'
 */
Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::delete('product/{id}', 'ProductController@delete');
Route::post('product', 'ProductController@store');
Route::post('product/{id}', 'ProductController@update');