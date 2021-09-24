<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosPoliticos extends Controller
{
    public function Articulos(){
        return view('policias');
    }
}
