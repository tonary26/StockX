<?php

namespace App\Http\Controllers\Product;

use App\Filters\ProductFilter;
use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke(ProductFilter $filter)
    {
        $products = Product::filter($filter)->get();
        return view('products.index', compact('products'));
    }
}
