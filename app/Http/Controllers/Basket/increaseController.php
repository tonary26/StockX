<?php

namespace App\Http\Controllers\Basket;

use App\Models\Basket;

class increaseController extends BaseController
{
    public function __invoke(Basket $basket)
    {
        $this->service->increase($basket);

        return back();
    }
}