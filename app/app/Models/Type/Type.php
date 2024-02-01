<?php

namespace App\Models\Type;

use App\Models\Musique\Musique; // Import the Musique class
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
