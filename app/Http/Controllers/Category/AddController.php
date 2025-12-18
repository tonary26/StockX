<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AddController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('categories.add', compact('categories'));
    }
}
