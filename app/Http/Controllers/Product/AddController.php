<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\BaseController;

use App\Models\Size;
use App\Models\Category;

class AddController extends BaseController
{
    public function __invoke()
    {
        $sizes = Size::all();
        $categories = Category::whereNotNull('parent_id')->get();

        return view('products.add', compact('sizes', 'categories'));
    }
}
