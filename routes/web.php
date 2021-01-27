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
    return view('inicio.index');
});
Route::get('index', function () {
    return view('inicio.index');
});
Route::get('progmat', function () {
    return view('inicio.progmat');
});

Route::get('calificacionparcial', function () {
    return view('inicio.calificacionparcial');
});

Route::get('instrumdidactica', function (){
    return view('inicio.instrumdidactica');
});

Route::get('gestioncurso', function (){
    return view('inicio.gestioncurso');
});

Route::get('evaluaciones', function (){
    return view('inicio.evaluaciones');
});

Route::get('horario', function (){
    return view('inicio.horario');
});

Route::get('periodocurso', function (){
    return view('inicio.periodocurso');
});

Route::get('seguimientosalum', function (){
    return view('inicio.seguimientosalum');
});

Route::get('registrochecado', function (){
    return view('inicio.registrochecado');
});

Route::get('exam-espe-glob', function (){
    return view('inicio.exam-espe-glob');
});
Route::get('actacalif', function (){
    return view('inicio.actacalif');
});

Route::post('edit/','AlumnosControler@edit')->name('edit');

Route::get('editar/{id}','AlumnosControler@editar')->name('editar');
Route::get('formcalif','AlumnosControler@index');
Route::get('actacalif','AlumnosControler@acta');
Route::post('formcalif','AlumnosControler@create')->name('formularios.formcalif');
//Route::get('calificacionparcial','AlumnosControler@index')->name('editar');
//Route::post('categorias','CategoriasControler@store');
//Route::get('categorias/create','CategoriasControler@create');
//Route::get('categorias/{categoria}','CategoriasControler@show');
//Route::put('categorias/{categoria}','CategoriasControler@update');
//Route::delete('categorias/{categoria}','CategoriasControler@destroy');
//Route::get('categorias/{categoria}/edit','CategoriasControler@edit');