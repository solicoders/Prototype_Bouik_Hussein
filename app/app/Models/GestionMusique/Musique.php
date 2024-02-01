<?php

namespace App\Models\GestionMusique;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musique extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
