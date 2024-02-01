<?php

namespace App\Models\GestionMusique;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musique extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'titre',
        'artiste',
        'type_id',
        'reference',
        'created_at',
        'updated_at',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
