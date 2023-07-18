<?php

namespace App\Models\Traits\AssistantTraits;

use App\Models\AassistantImage;

trait AssistantRelationship
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

    public function images()
    {
        return $this->hasMany(AassistantImage::class);
    }
}
