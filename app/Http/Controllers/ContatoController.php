<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    
    public function contato(Request $request)
    {
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $motivo_contatos = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('Site.contato', ['titulo' => 'Contato (perfil)', 'motivo_contatos' => $motivo_contatos]);

    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:10|max:40',
            'telefone' => 'required',
            'email' => 'required|min:10',
            'motivo_contao' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

    }
}
