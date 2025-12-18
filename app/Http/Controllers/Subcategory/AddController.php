<?php

namespace App\Http\Controllers\Subcategory;

class AddController extends BaseController
{
    public function __invoke()
    {
        return view('subcategories.add');
    }
}
