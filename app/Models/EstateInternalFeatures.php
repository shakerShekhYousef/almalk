<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateInternalFeatures extends Model
{
    use HasFactory;

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function InternalFeatures()
    {
        return $this->belongsTo(InternalFeatures::class);
    }
}
