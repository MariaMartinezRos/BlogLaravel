<?php

namespace App\Http\Controllers;

use App\Models\Post;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = DB::table('posts')->get(); //IGUAL A = select * from posts;
//        dd($posts) -> 'first post';
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
//        $post = Post::find($id);
//        Model Binding -> enlacae PK ocn el modelo

//        return "Detalle del post ".$post->title;

//      mostrar vistas
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //hya que hacer uana redireccecion par auqe una vez qeu cree o guarde le post se me redirija al index
//        return $request->input('title');
        $post= new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created successfully');

        return to_route('posts.index');
    }
}



