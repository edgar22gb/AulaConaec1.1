<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maestros extends Controller
{

	//funcion para la vista del maestro
	public function index()
	{
		return view('Maestros/index');
	}
    //
}
