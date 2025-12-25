<?php

namespace App\Http\Controllers\Product;

use App\Filters\ProductFilter;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class IndexController extends BaseController
{
    public function __invoke(ProductFilter $filter)
    {
        $products = $this->service->getProducts($filter);
        return view('products.index', compact('products'));
    }
}
