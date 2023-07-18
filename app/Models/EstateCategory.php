<?php

namespace App\Models;

use App\Models\Traits\EstateCategoryTraits\EstateCategoryRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateCategory extends Model
{
    use HasFactory, EstateCategoryRelationship;

    protected $guarded = [];

    protected $casts = [
        'property_id' => 'array',
    ];
}
