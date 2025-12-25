<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Shoes' => ['Sneakers', 'Boots', 'Sandals'],
        ];

        foreach ($categories as $category => $subCategory) {
            $parent = Category::create(['title' => $category]);

            $children = array_map(function ($childTitle) use ($parent) {
                return [
                    'title' => $childTitle,
                    'parent_id' => $parent->id
                ];
            }, $subCategory);

            Category::insert($children);
        }
    }
}
