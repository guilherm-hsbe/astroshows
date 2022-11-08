<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngressoController extends Controller
{
    public function ingresso(){
        return view ('site.ingresso');
    }
}
