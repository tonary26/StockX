<?php

namespace App\Services\Product;

use App\Models\Product;

class Service
{
    public function store($request)
    {
        $data = $request->validated();

        $data['image'] = $request->file('image')->store(
            'products',
            'public'
        );

        $product = Product::create([
            'title' => $data['title'],
            'price' => $data['price'],
            'amount' => $data['amount'],
            'image' => $data['image'],
            'category_id' => $data['category_id']
        ]);

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