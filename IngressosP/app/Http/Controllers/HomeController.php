<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Ingresso;
use App\Models\User;

use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function home(){
        $shows = Show::all();
        return view ('site.home',compact('shows'));
    }

    public function store(Request $request){
        $shows = Show::all();
        $users = User::all();

        $ingresso = new Ingresso;
        $ingresso->shows_id = $request->$shows->show->id;
        $ingresso->users_id = $request->$users->user->id;

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