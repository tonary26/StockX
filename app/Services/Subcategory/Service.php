<?php

namespace App\Services\Subcategory;

use App\Models\Category;

class Service
{
    public function store($data)
    {
        Category::create([
            'title' => $data['title']
        ]);
    }
}