<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    public function index(){
        $locais = Local::all();
        return view ('site.local',compact('locais'));
    }
}
