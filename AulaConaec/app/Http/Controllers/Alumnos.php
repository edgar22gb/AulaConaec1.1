<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumnos extends Controller
{
    //
    //se agrega la función para mandar llamar la vista
    public function index()
    {
    	return view('Alumnos/index');

    }
}
