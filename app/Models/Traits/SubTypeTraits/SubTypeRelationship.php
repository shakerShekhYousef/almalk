<?php

namespace App\Models\Traits\SubTypeTraits;

use App\Models\Car;

trait SubTypeRelationship
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
