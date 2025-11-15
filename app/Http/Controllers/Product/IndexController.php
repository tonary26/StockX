<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\BaseController;
use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
