<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\Store;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke(Store $request)
    {
        $this->authorize('create', Category::class);

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('index');
    }
}
