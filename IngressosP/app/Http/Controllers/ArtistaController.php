<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{
    public function artista(){
        $artistas = Artista::all();
        return view ('site.artista',compact('artistas'));
    }
}
