<?php

namespace App\Http\Controllers;
use PhpParser\Node\Expr\AssignOp\Concat;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index() {
        $contato = Contato::all();

        return view('site.contatos', ['contato' => $contato]);
    }

    public function store(Request $request) {
        $contato = new Contato;

        $contato->nome = $request->nomeContato;
        $contato->email = $request->emailContato;
        $contato->telefone = $request->telefoneContato;
        $contato->mensagem = $request->mensagemContato;
        $contato->status = false;

        // Mensagem Status
        try {
            $contato->save();

            return redirect()->action([ContatoController::class,'index'])
                                    ->with('msg','Mensagem enviada!');
        } catch (\Exception $e) {
            return redirect()->action([ContatoController::class,'index'])
                                    ->with('msg','Falha no envio da mensagem!');
        }
    }
}
