<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Artista;
use App\Models\Local;

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
        $artistas = Artista::all();
        $locais = Local::all();
        return view('showsmanager.create', compact('artistas', 'locais'));
    }

    // * STORE ---------------------------------|
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'qtd_ingressos' => 'required',
            'data' => 'required',
            'horario_i' => 'required',
            'horario_f' => 'required',
            'artista_id' => 'required',
            'local_id' => 'required',
            'imagem' => 'required',
        ]);

        // Artista::create($request->all());

        // Requisitar os campos no cadastro
        $show = new Show;
        $show->nome = $request->nome;
        $show->descricao = $request->descricao;
        $show->qtd_ingressos = $request->qtd_ingressos;
        $show->data = $request->data;
        $show->horario_i = $request->horario_i;
        $show->horario_f = $request->horario_f;
        $show->artista_id = $request->artista_id;
        $show->local_id = $request->local_id;
        $show->imagem = ""; #opcional
        $dirImage = "images/shows";

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            // Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            // Mover a imagem
            $requestImage->move(public_path($dirImage), $imageName);
            $show->imagem = $dirImage . "/" . $imageName;
        };

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
        $artistas = Artista::all();
        $locais = Local::all();
        return view('showsmanager.edit',compact('show', 'artistas', 'locais'));
    }

    // * UPDATE ---------------------------------|
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'qtd_ingressos' => 'required',
            'data' => 'required',
            'horario_i' => 'required',
            'horario_f' => 'required',
            'artista_id' => 'required',
            'local_id' => 'required',
            'imagem' => 'required',
        ]);

        $data = $request->all();
        
        Show::findOrFail($id)->update($data);

        return redirect()->route('showsmanager.index')->with('success','Cadastro de show atualizado com sucesso!');
    }

    // * DESTROY ---------------------------------|
    public function destroy($id)
    {
        Show::findOrFail($id)->delete();

        return redirect()->route('showsmanager.index')->with('success','Cadastro de show excluído com sucesso!');
    }
}
