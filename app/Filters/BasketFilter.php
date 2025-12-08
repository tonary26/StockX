<?php

namespace App\Filters;

class BasketFilter extends QueryFilter
{
    public function session_id()
    {
        return $this->builder->where('session_id', session()->getId());
    }
}