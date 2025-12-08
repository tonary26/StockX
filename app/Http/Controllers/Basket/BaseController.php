<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Services\Basket\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}