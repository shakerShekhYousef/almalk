<?php

namespace App\Models\Traits\EstateTraits;

use App\Models\EstateImage;
use App\Models\EstateProperty;

trait EstateRelationship
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

    public function images()
    {
        return $this->hasMany(EstateImage::class);
    }

    public function properties()
    {
        return $this->hasMany(EstateProperty::class);
    }

    public function Estate_Category()
    {
        return 's';
    }
}
