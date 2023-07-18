<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateCategorySub extends Model
{
    use HasFactory;

    protected $casts = [
        'property_id' => 'array',
    ];
}
