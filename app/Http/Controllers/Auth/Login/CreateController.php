<?php

namespace App\Http\Controllers\Auth\Login;


class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('auth.login');
    }
}
