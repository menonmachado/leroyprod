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

Route::get('product', function() {
    return Product::all();
});
 
Route::get('product/{id}', function($id) {
    return Product::find($id);
});

Route::delete('product/{id}', function($id) {
    Product::find($id)->delete();
    return 204;
});

Route::post('product', function(Request $request) {
    return Product::create($request->all);
});

// Route::put('product/{id}', function(Request $request, $id) {
//     $product = Product::findOrFail($id);
//     $product->update($request->all());

//     return $product;
// });

Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::delete('product/{id}', 'ProductController@delete');
Route::post('product', 'ProductController@store');
// Route::put('product/{id}', 'ProductController@update');