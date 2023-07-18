<?php

namespace App\Models\Traits\TeacherImageTraits;

use App\Models\Teacher;

trait TeacherImageRelation
{
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
