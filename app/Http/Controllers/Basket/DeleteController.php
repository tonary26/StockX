<?php

namespace App\Http\Controllers\Basket;

use App\Models\Basket;

class DeleteController extends BaseController
{
    public function __invoke(Basket $basket)
    {
        $this->service->delete($basket);

        return redirect()->route('baskets.index');
    }
}