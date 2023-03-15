<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response($products);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       return response($product);
    }
}
