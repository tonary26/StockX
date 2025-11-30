<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Requests\Auth\Password\ResetPassword;
use Illuminate\Support\Facades\Password;

class ResetController extends BaseController
{
    public function __invoke(ResetPassword $request)
    {
        $status = $this->service->resetPassword($request);

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('index')->with(
                'status', __($status)
            );
        }

        return back()->withErrors([
            'email' => __($status)
        ]);
    }
}