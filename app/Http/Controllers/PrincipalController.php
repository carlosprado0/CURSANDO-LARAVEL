<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){
        $motivo_contatos = MotivoContato::all();
        return view('Site.principal',['motivo_contatos' => $motivo_contatos]);
    }

}