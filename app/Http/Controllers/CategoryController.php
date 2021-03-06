<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->load('descendantsAndSelf.products');

        return view('categories.show', [
            'category' => $category
        ]);
    }
}
