<?php

namespace App\Models\GestionMusique;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'reference',
        'created_at',
        'updated_at',
    ];
    public function musiques()
    {
        return $this->hasMany(Musique::class);
    }
}
