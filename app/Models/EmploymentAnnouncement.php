<?php

namespace App\Models;

use App\Models\Traits\EmploymentAnnouncementTraits\EmploymentRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentAnnouncement extends Model
{
    use HasFactory, EmploymentRelationship;

    protected $guarded = [];
}
