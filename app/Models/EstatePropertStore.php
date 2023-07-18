<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatePropertStore extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function property()
    {
        return $this->belongsTo(EstateProperty::class);
    }
}
