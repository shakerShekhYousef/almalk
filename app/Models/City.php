<?php

namespace App\Models;

use App\Models\Traits\CityTraits\CityRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory, CityRelationship;

    protected $guarded = [];
}
