<?php

namespace App\Models\Traits\EmploymentImageTraits;

use App\Models\EmploymentAnnouncement;

trait EmploymentImageRelation
{
    public function employment()
    {
        return $this->belongsTo(EmploymentAnnouncement::class);
    }
}
