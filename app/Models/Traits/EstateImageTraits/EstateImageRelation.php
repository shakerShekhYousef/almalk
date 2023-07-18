<?php

namespace App\Models\Traits\EstateImageTraits;

use App\Models\Estate;

trait EstateImageRelation
{
    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
