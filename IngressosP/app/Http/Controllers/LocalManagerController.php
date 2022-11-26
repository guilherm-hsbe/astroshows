<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalManagerController extends Controller
{
    // * INDEX ---------------------------------|
    public function index()
    {
        $locais = Local::latest()->paginate(5);

        return view('locaismanager.index',compact('locais'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // * CREATE ---------------------------------|
    public function create()
    {
        return view('locaismanager.create');
    }

    // * STORE ---------------------------------|
    public function store(Request $request)
    {
        $request->validate([
            'nLocal' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
        ]);

        // Requisitar os campos no cadastro
        $local = new Local;
        $local->nLocal = $request->nLocal;
        $local->endereco = $request->endereco;
        $local->numero = $request->numero;
        $local->cidade = $request->cidade;
        $local->estado = $request->estado;
        $local->cep = $request->cep;

        $local->save();

        return redirect()->route('locaismanager.index')->with('success','Local cadastrado com sucesso!');
    }

    // * SHOW ---------------------------------|
    public function show($id)
    {
        $local = Local::findOrFail($id);

        return view('locaismanager.show',compact('local'));
    }

    // * EDIT ---------------------------------|
    public function edit($id)
    {
        $local = Local::findOrFail($id);

        return view('locaismanager.edit',compact('local'));
    }

    // * UPDATE ---------------------------------|
    public function update(Request $request, $id)
    {
        $request->validate([
            'nLocal' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
        ]);

        $data = $request->all();
        
        Local::findOrFail($id)->update($data);

        return redirect()->route('locaismanager.index')->with('success','Cadastro de local atualizado com sucesso!');
    }

    // * DESTROY ---------------------------------|
    public function destroy($id)
    {
        Local::findOrFail($id)->delete();

        return redirect()->route('locaismanager.index')->with('success','Cadastro de local excluido com sucesso!');
    }
}
