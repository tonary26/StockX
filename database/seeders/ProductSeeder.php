<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Size;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = Size::all();

        Product::factory(150)->create()->each(function ($product) use ($sizes) {
            $product->sizes()->attach(
                $sizes->random(rand(1, $sizes->count()))->pluck('id')
            );
        });
    }
}
