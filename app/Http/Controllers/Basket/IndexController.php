<?php

namespace App\Http\Controllers\Basket;

use App\Models\Basket;
use App\Filters\BasketFilter;
class IndexController extends BaseController
{
    public function __invoke(BasketFilter $filter)
    {
        $baskets = Basket::filter($filter)->get();
        return view('basket.index', compact('baskets'));
    }
}