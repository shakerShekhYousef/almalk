<?php

namespace App\Models\Traits\AnimalImageTraits;

use App\Models\Animal;

trait AnimalImageRelation
{
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
