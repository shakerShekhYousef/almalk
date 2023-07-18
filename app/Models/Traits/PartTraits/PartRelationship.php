<?php

namespace App\Models\Traits\PartTraits;

use App\Models\PartImage;

trait PartRelationship
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
        return $this->hasMany(PartImage::class);
    }
}
