<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Requests\Auth\Register\Store;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        $request->session()->regenerate();

        return redirect()->route('index');
    }
}
