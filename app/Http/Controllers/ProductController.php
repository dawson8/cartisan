<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'products' => Product::get()
        ]);
    }
}
