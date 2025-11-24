<?php

namespace App\Services\Auth\Register;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data)
    {
        $user = User::create($data);

        Auth::login($user);
    }
}