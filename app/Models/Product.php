<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Size;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'amount', 'category_id', 'size_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sizes()
    {
        return $this->belongsTo(Size::class);
    }
}
