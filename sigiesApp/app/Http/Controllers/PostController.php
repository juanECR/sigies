<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function create(){
        return "aqui post para create";
    }
    public function show($post){
      return view('posts.show',compact('post'));
    }
}
