<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\Size;
use App\Models\Product;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $sizes = Size::all();
        $categories = Category::whereNotNull('parent_id')->get();

        return view('products.update', compact('sizes', 'categories', 'product'));
    }
}
