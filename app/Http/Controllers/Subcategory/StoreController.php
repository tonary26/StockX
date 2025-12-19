<?php

namespace App\Http\Controllers\Subcategory;

use App\Http\Requests\Subcategory\Store;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('index');
    }
}
