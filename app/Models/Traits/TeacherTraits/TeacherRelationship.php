<?php

namespace App\Models\Traits\TeacherTraits;

use App\Models\Area;
use App\Models\TeacherImage;

trait TeacherRelationship
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
        return $this->hasMany(TeacherImage::class);
    }
}
