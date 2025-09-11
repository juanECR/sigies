<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);


Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
//ruta normal
Route::get("/prueba",function(){
  return "hola desde la ñpagina de prueba";
});

//rutas con parametro
Route::get("cursos/{curso}-{cate?}", function($curso, $cate=null){
    return "Bienvenmido al curso: $curso y cate: $cate";
});

//metodos - get put post delete patch