<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateView extends Model
{
    use HasFactory;

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function view()
    {
        return $this->belongsTo(View::class);
    }
}
