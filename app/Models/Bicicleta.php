<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {
        return substr($this->descripcion, 0, 200);
    }
    
    public function getPublishedAtAttribute()
    {
        return $this->created_at; // ->format('d/m/y')
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}

