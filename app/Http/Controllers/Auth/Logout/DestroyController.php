<?php

namespace App\Http\Controllers\Auth\Logout;

use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Request $request)
    {
        $this->service->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
