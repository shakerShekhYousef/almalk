<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateHousingType extends Model
{
    use HasFactory;

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function HousingType()
    {
        return $this->belongsTo(HousingType::class);
    }
}
