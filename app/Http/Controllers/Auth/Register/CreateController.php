<?php

namespace App\Http\Controllers\Auth\Register;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('auth.register');
    }
}
