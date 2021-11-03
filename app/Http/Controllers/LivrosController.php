<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use App\Repositories\ClimaTempo;

class LivrosController extends Controller
{
    public function index(ClimaTempo $consulta)
    {
        $resultado = $consulta->local();
        $dados = Livros::paginate(8);

        // dd($dados);
        return view('painel.consulta', ['resultado' => $resultado , 'dados' => $dados]);


    }

    public function store(Request $request, ClimaTempo $consulta)
    {
        $resultado = $consulta->local();

        $dados = new Livros();

        $dados->user_id     = $request->id;
        $dados->Titulo      = $request->titulo;
        $dados->Descricao   = $request->Descricao;
        $dados->Autor       = $request->Autor;
        $dados->Npag        = $request->Npag;
        $dados->Dtcad       = $request->Dtcad;

        $insert = $dados->save();
        
        if ($insert)
        return view('painel.index', ['resultado' => $resultado ])->with('success', 'Livro inserido com sucesso!');
 

        return view('painel.index')->with('error', 'Falha ao inserir');

    }

    public function edit(Request $request){

    }

    public function delete(Request $request){

    }




}
