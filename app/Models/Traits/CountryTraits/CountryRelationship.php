<?php

namespace App\Models\Traits\CountryTraits;

use App\Models\City;

trait CountryRelationship
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
