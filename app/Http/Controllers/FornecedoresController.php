<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
        0 => ['nome' => 'Joao Almeida', 'status' => 'Disponivel'],
        1 => ['nome' => 'Maria Antonia', 'status' => 'Disponivel']
    ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
    
}
