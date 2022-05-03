<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        return view('shop', [
            'products' => Product::get()
        ]);
    }
}
