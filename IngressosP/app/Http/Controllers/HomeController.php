<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class HomeController extends Controller
{
    public function home(){
        $shows = Show::all();
        return view ('site.home',compact('shows'));
    }
}
