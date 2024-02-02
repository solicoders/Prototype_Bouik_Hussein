<?php

namespace App\Http\Controllers\GestionMusique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        
        return view('musiques.index');
    }
}
