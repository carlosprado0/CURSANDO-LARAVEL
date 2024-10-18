<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
        0 => ['nome' => 'Joao Almeida', 'status' => 'Disponivel', 'CNPJ' => '00.000.00/0000-00', 'DDD' => '62', 'Celular' => '0000-0000'],
        1 => ['nome' => 'Maria Antonia', 'status' => 'Disponivel','CNPJ' => '00.000.00/0000-00', 'DDD' => '11', 'Celular' => '0000-0000'],
        2 => ['nome' => 'Carlos Magril', 'status' => 'Indisponivel','CNPJ' => '00.000.00/0000-00', 'DDD' => '63', 'Celular' => '0000-0000']
    ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
    
}
