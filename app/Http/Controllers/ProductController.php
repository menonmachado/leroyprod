<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }
 
    public function show($id)
    {
        return Product::find($id);
    }

    public function delete(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return 204;
    }

    public function store(Request $request)
    {
        if($request->file('file')){
            echo '<pre>'; print_r($request->file('file')); exit;
        }

        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {    
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

}