<?php

namespace App\Models\Traits\AreaTraits;

trait AreaRelationship
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function estates()
    {
        return $this->hasMany(Estate::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    public function assistants()
    {
        return $this->hasMany(Assistant::class);
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
