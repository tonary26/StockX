<?php

namespace App\Services\Product;

use App\Models\Product;

class Service
{
    public function store(array $data)
    {
        $product = Product::create($data);

        if (!empty($data['size_id'])) {
            $product->sizes()->attach($data['size_id']);
        }
    }

    public function update($product, $data)
    {
        $product->update($data);
    }

    public function delete($product)
    {
        $product->delete();
    }
}