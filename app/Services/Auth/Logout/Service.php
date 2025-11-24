<?php

namespace App\Services\Auth\Logout;

use Illuminate\Support\Facades\Auth;

class Service
{
    public function logout()
    {
        Auth::logout();
    }
}