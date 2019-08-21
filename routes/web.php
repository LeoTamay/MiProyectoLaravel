<?php

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

    return view('welcome');
});
Route::get('/nacimiento/{edad}', function ($edad) {
    
    $anyo = 2019 - $edad;
    $nombre = 'Matias';
    return "el usuario {$nombre} tiene {$anyo} años";
});
Route::get('/nacimiento/{edad}/{mes}', function ($edad, $mesing) {
    
    /*$fecha = getdate();

    $anyoActual = $fecha["year"] ;

    return response()->json() ["anyo" =>$anyoActual]);*/
    $anyo = 2019 - $edad;
    $mesActual = 8 ;
    $mes = $mesActual - $mesing;
    $edad = 0 ;
    if ($mesActual<$mesing) {
        $edad = ($anyo - 1) ;
    } else {
        $edad = $anyo ;
    };
    return " Tiene {$edad} años";

});
