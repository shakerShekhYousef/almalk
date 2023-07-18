<?php

namespace App\Models\Traits\CityTraits;

use App\Models\Country;

trait CityRelationship
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
