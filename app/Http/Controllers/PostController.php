<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index (){
       
        $posts = [

            'title' =>  "Mon super titre",
            'title2' => "Mon super second titre"
          ];
       

        return view('articles', compact('posts'));
         
    }

    public function show($id){
        
        $posts = [
           1 => 'Mon titre  N 1',
           2 => 'Mon titre  N 2'
        ];


        $post = $posts[$id] ?? 'Pas de titre';

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
         return view('contact');
    }
}
