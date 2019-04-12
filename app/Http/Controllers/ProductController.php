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

    public function update(Request $request, $id)
    {    
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

    public function spreadsheet(Request $request)
    {
        echo  532452354324; exit;
    	return $request->file('file');
    }
}
