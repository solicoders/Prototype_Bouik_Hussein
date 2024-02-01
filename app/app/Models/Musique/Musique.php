<?php

namespace App\Models\Musique;

use App\Models\Type\Type; // Import the Type class

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
