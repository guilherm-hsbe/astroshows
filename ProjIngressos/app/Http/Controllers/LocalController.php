<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    public function index(){
        return view ('site.local');
    }
    public function store(Request $request) {
        $local = new Local;
        $local->nLocal = $request->nomeLocal;
        $local->endereco = $request->endereco;
        $local->numero = $request->numero;
        $local->cidade = $request->cidade;
        $local->estado = $request->estado;
        $local->cep = $request->cep;

        try {
            $local->save();

            return redirect()->action([LocalController::class,'index'])
                                    ->with('msg','Local cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([LocalController::class,'index'])
                                    ->with('msg','Falha no cadastro do local!');
        }

    }
}
