<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
//RUTA PARA EL PANEL ADMINISTRATIVO
Route::get('Admin','Administrativos@index');
//RUTA PARA EL PANEL DEL ALUMNO
Route::get('Alumno','Alumnos@index');
//RUTA PARA EL PANEL DEL MAESTRO
Route::get('Maestro','Maestros@index');



/*/Route::get('/index',function()
{
	return view('index');
});
