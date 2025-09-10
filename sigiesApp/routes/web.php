<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return "hola";
});

Route::get("/prueba",function(){
  return "hola desde la ñpagina de prueba";
});

//rutas con parametro
Route::get("cursos/{curso}-{cate?}", function($curso, $cate=null){
    return "Bienvenmido al curso: $curso y cate: $cate";
});
