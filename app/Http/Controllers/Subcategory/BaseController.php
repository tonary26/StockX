<?php

namespace App\Http\Controllers\Subcategory;

use App\Http\Controllers\Controller;
use App\Services\Subcategory\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
