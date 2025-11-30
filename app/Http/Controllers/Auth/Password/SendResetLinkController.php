<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Requests\Auth\Password\ForgotPassword;
use Illuminate\Support\Facades\Password;

class SendResetLinkController extends BaseController
{
    public function __invoke(ForgotPassword $request)
    {
        $status = $this->service->sendResetLink($request);

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        return back()->withErrors([
            'email' => __($status)
        ]);
    }
}