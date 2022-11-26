<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class ShowController extends Controller
{
    public function show(){
        return view ('site.show');
    }
}
