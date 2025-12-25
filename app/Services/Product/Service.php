<?php

namespace App\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class Service
{
    public function getProducts($filter)
    {
        $page = request('page', 1);

        $filters = request()->query();

        $key = 'product:' . md5(json_encode($filters)) . 'page:' . $page;

        $products = Cache::remember($key, 300, function () use ($filter) {
            return Product::filter($filter)
                            ->paginate(20)
                            ->withQueryString();
        });

        return $products;
    }
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
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('product', 'public');
        }

        $product->update($data);
    }

    public function delete($product)
    {
        $product->delete();
    }
}