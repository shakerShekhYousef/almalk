<?php

namespace App\Models\Traits\AassistantImageTraits;

use App\Models\Assistant;

trait AassistantImageRelation
{
    public function assistant()
    {
        return $this->belongsTo(Assistant::class);
    }
}
