<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaManagerController extends Controller
{
    // * INDEX ---------------------------------|
    public function index()
    {
        $artistas = Artista::latest()->paginate(5);

        return view('artistasmanager.index',compact('artistas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // * CREATE ---------------------------------|
    public function create()
    {
        return view('artistasmanager.create');
    }

    // * STORE ---------------------------------|
    public function store(Request $request)
    {
        $request->validate([
            'nome_artistico' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        // Artista::create($request->all());

        // Requisitar os campos no cadastro
        $artista = new Artista;
        $artista->nome_artistico = $request->nome_artistico; #obrigatório
        $artista->descricao = $request->descricao; #obrigatório
        $artista->imagem = ""; #opcional
        $dirImage = "images/artistas";

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            // Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            // Mover a imagem
            $requestImage->move(public_path($dirImage), $imageName);
            $artista->imagem = $dirImage . "/" . $imageName;
        };

        $artista->save();

        return redirect()->route('artistasmanager.index')->with('success','Artista cadastrado com sucesso!');
    }

    // * SHOW ---------------------------------|
    public function show($id)
    {
        $artista = Artista::findOrFail($id);

        return view('artistasmanager.show',compact('artista'));
    }

    // * EDIT ---------------------------------|
    public function edit($id)
    {
        $artista = Artista::findOrFail($id);

        return view('artistasmanager.edit',compact('artista'));
    }

    // * UPDATE ---------------------------------|
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_artistico' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        $data = $request->all();
        
        Artista::findOrFail($id)->update($data);

        return redirect()->route('artistasmanager.index')->with('success','Cadastro de artista atualizado com sucesso!');
    }

    // * DESTROY ---------------------------------|
    public function destroy($id)
    {
        Artista::findOrFail($id)->delete();

        return redirect()->route('artistasmanager.index')->with('success','Cadastro de artista excluido com sucesso!');
    }
}
