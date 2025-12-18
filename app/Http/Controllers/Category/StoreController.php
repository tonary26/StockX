<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\Store;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('index');
    }
}
