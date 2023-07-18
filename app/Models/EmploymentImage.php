<?php

namespace App\Models;

use App\Models\Traits\EmploymentImageTraits\EmploymentImageRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentImage extends Model
{
    use HasFactory, EmploymentImageRelation;

    protected $guarded = [];
}
