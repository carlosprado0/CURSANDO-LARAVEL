<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2) {
        // Use os parâmetros $p1 e $p2
        return "O valor de p1 é: $p1 e o valor de p2 é: $p2";
    }
}