<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sms_verification extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_number', 'code', 'contact_email',
    ];
}
