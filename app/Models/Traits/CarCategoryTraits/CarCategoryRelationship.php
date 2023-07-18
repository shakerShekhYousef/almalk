<?php

namespace App\Models\Traits\CarCategoryTraits;

use App\Models\CarProperty;

trait CarCategoryRelationship
{
    public function properties()
    {
        return $this->hasMany(CarProperty::class);
    }
}
