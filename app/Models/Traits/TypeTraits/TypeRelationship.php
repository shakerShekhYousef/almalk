<?php

namespace App\Models\Traits\TypeTraits;

use App\Models\Category;
use App\Models\SubType;

trait TypeRelationship
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subTypes()
    {
        return $this->hasMany(SubType::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function estates()
    {
        return $this->hasMany(Estate::class);
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

    public function employments()
    {
        return $this->hasMany(EmploymentAnnouncement::class);
    }
}
