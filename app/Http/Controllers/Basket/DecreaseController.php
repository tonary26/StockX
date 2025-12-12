<?php

namespace App\Http\Controllers\Basket;

use App\Models\Basket;

class DecreaseController extends BaseController
{
    public function __invoke(Basket $basket)
    {
        $this->service->decrease($basket);

        return back();
    }
}