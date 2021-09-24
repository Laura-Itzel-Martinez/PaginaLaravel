<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //un controlador no es mas que un metodo 
    //creacion de un controlador
    // constructor  __invoke

    public function __invoke()
    {
      return view('inicio');  
    }

}
