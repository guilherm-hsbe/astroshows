<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Ingresso;

class HomeController extends Controller
{
    public function home(){
        $shows = Show::all();
        return view ('site.home',compact('shows'));
    }

    public function store(){
        $ingresso = new Ingresso;

        try {
            $ingresso->save();

            return redirect()->action([HomeController::class,'home'])
                                    ->with('msg','Compra realizada!');
        } catch (\Exception $e) {
            return redirect()->action([HomeController::class,'home'])
                                    ->with('msg','Não possível efetuar a compra do ingresso...');
        }
    }
}