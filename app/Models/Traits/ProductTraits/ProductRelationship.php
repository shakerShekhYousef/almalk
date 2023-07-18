<?php

namespace App\Models\Traits\ProductTraits;

use App\Models\ProductImage;
use App\Models\SubType;

trait ProductRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function subType()
    {
        return $this->belongsTo(SubType::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
