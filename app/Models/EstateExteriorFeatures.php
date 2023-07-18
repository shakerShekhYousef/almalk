<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateExteriorFeatures extends Model
{
    use HasFactory;

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function ExteriorFeatures()
    {
        return $this->belongsTo(ExteriorFeatures::class);
    }
}
