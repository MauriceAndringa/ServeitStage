<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function send()
    {

//        $post = new Post;
//
//        $post->title = request('title');
//        $post->body = request('body');

        dd(request()->all());
    }
}
