<?php

namespace App\Models\Traits\PartImageTraits;

use App\Models\Part;

trait PartImageRelation
{
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
