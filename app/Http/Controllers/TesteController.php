<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        // parâmetros associativos $p1 e $p2
        //return view('site.teste', ['x' => $p1, 'z' => $p2]);

        //parametro tipo compact
        //return view('site.teste', compact('p1', 'p2'));

        //parametro tipo with
        return view('site.teste')->with('xss',$p1)->with('zzz', $p2);
    }
}