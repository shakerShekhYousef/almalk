<?php

namespace App\Models\Traits\EstatePropertyTraits;

use App\Models\Estate;
use App\Models\EstateCategory;

trait EstatePropertyRelation
{
    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function estateCate()
    {
        return $this->belongsTo(EstateCategory::class);
    }
}
