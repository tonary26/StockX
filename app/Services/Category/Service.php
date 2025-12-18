<?php

namespace App\Services\Category;
use App\Models\Category;


class Service
{
    public function store($data)
    {
        Category::create([
            'title' => $data['title'],
            'parent_id' => $data['category_id']
        ]);
    }
}