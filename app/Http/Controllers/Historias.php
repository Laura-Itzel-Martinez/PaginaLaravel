<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historias extends Controller
{
    public function Historia(){
        return view('hechosReales');
    }
}
