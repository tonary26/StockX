<?php

namespace App\Http\Controllers\Auth\Logout;

use App\Http\Controllers\Controller;
use App\Services\Auth\Logout\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}