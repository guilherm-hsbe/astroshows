<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutentController extends Controller
{
    public function home(){
        return view ('site.autenticacao');
    }
}
