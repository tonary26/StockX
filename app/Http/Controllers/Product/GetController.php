<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class GetController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('products.get', compact('product'));
    }
}
