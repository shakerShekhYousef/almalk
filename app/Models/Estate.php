<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    public function property()
    {
        return $this->hasMany(EstatePropertStore::class);
    }

    public function direction()
    {
        return $this->hasMany(EstateDirection::class);
    }

    public function InternalFeatures()
    {
        return $this->hasMany(EstateInternalFeatures::class);
    }

    public function ExteriorFeatures()
    {
        return $this->hasMany(EstateExteriorFeatures::class);
    }

    public function Environments()
    {
        return $this->hasMany(EstateEnvironment::class);
    }

    public function Transport()
    {
        return $this->hasMany(EstateTransports::class);
    }

    public function View()
    {
        return $this->hasMany(EstateView::class);
    }

    public function HousongType()
    {
        return $this->hasMany(EstateHousingType::class);
    }
}
