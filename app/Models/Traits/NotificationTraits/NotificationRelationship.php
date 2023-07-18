<?php

namespace App\Models\Traits\NotificationTraits;

trait NotificationRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
