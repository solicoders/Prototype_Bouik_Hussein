<?php

namespace App\Models\GestionMusique;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function musiques()
    {
        return $this->hasMany(Musique::class);
    }
}
