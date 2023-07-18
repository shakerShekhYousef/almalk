<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function estates()
    {
        return $this->hasMany(EstateTransports::class);
    }
}
