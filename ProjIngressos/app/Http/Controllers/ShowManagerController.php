<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowManagerController extends Controller
{
    // * INDEX ---------------------------------|
    public function index()
    {
        $shows = Show::latest()->paginate(5);

        return view('showsmanager.index',compact('shows'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // * CREATE ---------------------------------|
    public function create()
    {
        return view('showsmanager.create');
    }

    // * STORE ---------------------------------|
    public function store(Request $request)
    {
        $request->validate([
            'qtd_ingressos' => 'required',
            'data' => 'required',
            'horario_i' => 'required',
            'horario_f' => 'required',
            'artista_id' => 'required',
            'local_id' => 'required',
        ]);

        // Artista::create($request->all());

        // Requisitar os campos no cadastro
        $show = new Show;
        $show->qtd_ingressos = $request->qtd_ingressos;
        $show->data = $request->data;
        $show->horario_i = $request->horario_i;
        $show->horario_f = $request->horario_f;
        $show->artista_id = $request->artista_id;
        $show->local_id = $request->local_id;

        $show->save();

        return redirect()->route('showsmanager.index')->with('success','Show cadastrado com sucesso!');
    }

    // * SHOW ---------------------------------|
    public function show($id)
    {
        $show = Show::findOrFail($id);

        return view('showsmanager.show',compact('show'));
    }

    // * EDIT ---------------------------------|
    public function edit($id)
    {
        $show = Show::findOrFail($id);

        return view('showsmanager.edit',compact('show'));
    }

    // * UPDATE ---------------------------------|
    public function update(Request $request, $id)
    {
        $request->validate([
            'qtd_ingressos' => 'required',
            'data' => 'required',
            'horario_i' => 'required',
            'horario_f' => 'required',
            'artista_id' => 'required',
            'local_id' => 'required',
        ]);

        $data = $request->all();
        
        Show::findOrFail($id)->update($data);

        return redirect()->route('showsmanager.index')->with('success','Cadastro de show atualizado com sucesso!');
    }

    // * DESTROY ---------------------------------|
    public function destroy($id)
    {
        Artista::findOrFail($id)->delete();

        return redirect()->route('showsmanager.index')->with('success','Cadastro de show excluido com sucesso!');
    }
}