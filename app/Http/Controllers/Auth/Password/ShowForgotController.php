<?php

namespace App\Http\Controllers\Auth\Password;

use Illuminate\Http\Request;

class ShowForgotController extends BaseController
{
    public function __invoke()
    {
        return view('auth.forgot-password');
    }
}
