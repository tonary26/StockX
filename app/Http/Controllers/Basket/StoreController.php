<?php

namespace App\Http\Controllers\Basket;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke($product_id, Request $request)
    {
        $size = $request->input('size');

        $this->service->add($product_id, $size);

        return redirect()->route('basket.index');
    }
}