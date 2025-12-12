<?php

namespace App\Services\Basket;

use App\Models\Basket;
use App\Models\Product;

class Service
{
    public function add($product_id, $size)
    {
        $product = Product::findOrFail($product_id);


        $basket = Basket::where([
            'session_id' => session()->getId(),
            'product_id' => $product->id
        ])->first();

        if ($basket) {
            $basket->quantity++;
            $basket->save();
        } else {
            Basket::create([
                'session_id' => session()->getId(),
                'product_id' => $product->id,
                'price' => $product->price,
                'size' => $size
            ]);
        }

        return $basket;
    }

    public function increase($basket) {
        $basket->increment('quantity');
    }

    public function decrease($basket)
    {
        if ($basket->quantity <= 1) {
            $basket->delete();
            return;
        }

        $basket->decrement('quantity');
    }

    public function delete($basket)
    {
        $basket->delete();
    }
}
