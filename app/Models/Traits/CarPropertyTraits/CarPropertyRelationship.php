<?php

namespace App\Models\Traits\CarPropertyTraits;

use App\Models\CarCategory;

trait CarPropertyRelationship
{
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function carCate()
    {
        return $this->belongsTo(CarCategory::class);
    }
}
