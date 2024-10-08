<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get(); //IGUAL A = select * from posts;
//        dd($posts) -> 'first post';
        return view('blog', compact('posts'));
    }
}



