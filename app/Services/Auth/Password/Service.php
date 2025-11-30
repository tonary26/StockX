<?php

namespace App\Services\Auth\Password;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class Service
{
    public function sendResetLink($request)
    {
        return Password::sendResetLink(
            $request->only('email')
        );
    }

    public function resetPassword($request)
    {
        return Password::reset(
            $request->only('token', 'email', 'password', 'password_confirmation'),
            function ($user, $password) {
                $user->password = $password;

                $user->save();

                Auth::login($user);
            }
        );
    }
}