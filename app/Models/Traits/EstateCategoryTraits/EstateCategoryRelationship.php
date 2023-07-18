<?php

namespace App\Models\Traits\EstateCategoryTraits;

use App\Models\EstateProperty;

trait EstateCategoryRelationship
{
    public function properties()
    {
        return $this->hasMany(EstateProperty::class);
    }
}
