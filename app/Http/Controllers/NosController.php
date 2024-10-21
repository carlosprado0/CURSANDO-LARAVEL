<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosController extends Controller
{
    public function Nos(){
        return view('Site.nos');
    }
}