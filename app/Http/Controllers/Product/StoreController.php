<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Product\BaseController;
use App\Http\Requests\Product\Store;
use App\Models\Product;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $this->authorize('create', Product::class);

        $this->service->store($request);

        return redirect()->route('product.index');
    }
}
