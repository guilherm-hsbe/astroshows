<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function local(){
        return view ('site.local');
    }
}
