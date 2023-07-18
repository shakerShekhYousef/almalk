<?php

namespace App\Models\Traits\MachineImageTraits;

use App\Models\Machine;

trait MachineImageRelation
{
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
