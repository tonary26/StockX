<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\BaseController;
use App\Http\Requests\Product\Store;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('product.index');
    }
}
