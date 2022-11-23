<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalManagerController extends Controller
{
    public function index()
    {
        $locais = Local::latest()->paginate(5);
        return view('localmanager.index',compact('locais'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
