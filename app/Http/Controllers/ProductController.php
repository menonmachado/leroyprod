<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

/**
 * Controls the data flow into a product object.
 */
class ProductController extends Controller
{

    /**
     * Show all products.
     *
     * @return     object  All products from product list.
     */
    public function index()
    {
        return var_dump(Product::all());
    }
 
    /**
     * Shows single product details according do Id.
     *
     * @param      integer  $id     The identifier
     *
     * @return     object  Product detail.
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Deletes product from list according to Id informed.
     *
     * @param      \Illuminate\Http\Request  $request  The request
     * @param      integer                    $id       The identifier
     *
     * @return     object                   204 (HTTP)
     */
    public function delete(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return 204;
    }

    /**
     * Stores new single products.
     *
     * @param      \Illuminate\Http\Request  $request  The request
     *
     * @return     object                    The products details informed.
     */
    public function store(Request $request)
    {
        // Under development...
        // if($request->file('file')){
        //     echo '<pre>'; print_r($request->file('file')); exit;
        // }

        return Product::create($request->all());
    }

    /**
     * Updates a product from products list.
     *
     * @param      \Illuminate\Http\Request  $request  The request
     * @param      integer                    $id       The identifier
     *
     * @return     object                    Product details as uptaded.
     */
    public function update(Request $request, $id)
    {    
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

}