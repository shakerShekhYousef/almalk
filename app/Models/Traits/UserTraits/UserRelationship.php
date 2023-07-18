<?php

namespace App\Models\Traits\UserTraits;

use App\Models\Animal;
use App\Models\Assistant;
use App\Models\EmploymentAnnouncement;
use App\Models\Estate;
use App\Models\Machine;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Teacher;

trait UserRelationship
{
    // public function notifications()
    // {
    //     return $this->hasMany(Notification::class);
    // }
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

    public function sent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // A user can also receive a message
    public function received()
    {
        return $this->hasMany(Message::class, 'sent_to_id');
    }
}
