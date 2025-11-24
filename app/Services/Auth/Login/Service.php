<?php

namespace App\Services\Auth\Login;

use Illuminate\Support\Facades\Auth;


class Service
{
    public function store($data)
    {
        return Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ], $data['remember']);
    }
}