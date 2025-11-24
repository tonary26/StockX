<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Requests\Auth\Login\Store;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $data = $request->validated();

        if (!$this->service->store($data)) {
            return back()
                ->withInput()
                ->withErrors([
                    'password' => 'Incorrect password or email'
                ]);
        }

        $request->session()->regenerate();

        return redirect()->route('index');
    }
}
