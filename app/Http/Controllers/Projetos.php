<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;

class Projetos extends Controller
{
    public function registraProjeto(Request $request)
    {

        $projeto = Projeto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'link_da_aplicacao' => $request->link_da_aplicacao,
            'github' => $request->github,
            'imagem' => $request->imagem
            ]);
    }

    public function exibeProjetos()
    {

        $projetos = Projeto::All();

    }
    public function exibeProjeto($id)
    {

        $projeto = Projeto::find($id);

    }

    public function atualizaProjeto($id)
    {

        $projeto = Projeto::find($id);


    }

    public function atualizarProjeto(Request $request)
    {

        $projeto = Projeto::where('id', $request->id)->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'link_da_aplicacao' => $request->link_da_aplicacao,
            'github' => $request->github,
            'imagem' => $request->imagem
            ]);
    }

    public function deletaProjeto($id)
    {
        
        $projeto = Projeto::find($id);
        $projeto->delete();

    }


}
