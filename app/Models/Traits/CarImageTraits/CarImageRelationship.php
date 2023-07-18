<?php

namespace App\Models\Traits\CarImageTraits;

trait CarImageRelationship
{
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
