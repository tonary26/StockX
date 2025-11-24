<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\Update;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(Update $request, Product $product)
    {
        $data = $request->validated();
        $this->service->update($product, $data);

        return redirect()->route('product.index');
    }
}
