<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDirection extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function direstion()
    {
        return $this->belongsTo(direction::class);
    }
}
