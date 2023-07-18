<?php

namespace App\Models\Traits\ProductImageTraits;

use App\Models\Product;

trait ProductImageRelation
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
