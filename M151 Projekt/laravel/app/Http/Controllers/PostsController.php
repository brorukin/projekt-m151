<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($post){
        $posts = [
            'my-first-post' => 'Blue Lock',
            'my-second-post' => 'One Piece'
        ];
    
        if(! array_key_exists($post, $posts)){
            abort(404, 'Sorry, that post is not available.');
            return;
        }
        return view('Posts/wildcard',[
            'post' => $posts[$post]
        ]);
    }
}
