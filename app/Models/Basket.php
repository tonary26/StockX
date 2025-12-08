<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{

    protected $fillable = ['session_id', 'product_id', 'price', 'size', 'quantity',];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
