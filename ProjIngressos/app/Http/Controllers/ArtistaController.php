<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function artista(){
        return view ('site.artista');
    }
}
