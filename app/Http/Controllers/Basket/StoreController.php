<?php

namespace App\Http\Controllers\Basket;

use Illuminate\Http\Request;
use App\Models\Basket;

class StoreController extends BaseController
{
    public function __invoke($product_id, Request $request, Basket $basket)
    {
        $size = $request->input('size');

        $this->service->add($product_id, $size);

        return redirect()->route('basket.index');
    }
}