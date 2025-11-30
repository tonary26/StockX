<?php

namespace App\Http\Controllers\Auth\Password;

class ShowResetFormController extends BaseController
{
    public function __invoke(string $token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }
}