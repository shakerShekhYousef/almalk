<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingType extends Model
{
    use HasFactory;

    public function estates()
    {
        return $this->hasMany(EstateHousingType::class);
    }
}
