<?php

use Illuminate\Http\Request;  /*Esta es una bliblioteca que maneja las peticiones http del usuario*/
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {    //Viene por defecto
    return view('welcome');
});*/

Route::get('/', function () {
    return 'Ruta home';
});

Route::get('/blog', function () {
    return 'Listado de publicaciones';
});

Route::get('/tienda', function () {
    return 'Listado de publicaciones';
});

Route::get('/blog/{slug}', function($slug) {
    //simularemos una consulta a base de datos
    return $slug;
});
Route::get('buscar', function(Request $request) {
    //simularemos una consulta a base de datos
    return $request->all(); /*retornamos toda la informacion respecto a la solicitud o peticion*/
    });


