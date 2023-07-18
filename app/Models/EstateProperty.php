<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateProperty extends Model
{
    use HasFactory;

    public function EstatePropertyOption()
    {
        return $this->hasMany(EstatePropertyOptiens::class);
    }

    public function estates()
    {
        return $this->hasMany(EstatePropertStore::class);
    }
}
