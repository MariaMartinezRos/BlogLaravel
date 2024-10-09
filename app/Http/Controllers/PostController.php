<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
//        $posts = DB::table('posts')->get(); //IGUAL A = select * from posts;
//        dd($posts) -> 'first post';
        $posts = Post::all();

        return view('blog', compact('posts'));
    }

    public function show(Post $post)
    {

    }
}



