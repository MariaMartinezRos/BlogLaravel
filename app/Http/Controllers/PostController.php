<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function _construct(){
        $this->middleware('auth')->except('index', 'show');
    }
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
        return view('posts.create',['post'=>new Post()]);
    }

    public function store(StorePostRequest $request){

//        dd($validated);

        Post::create($request->validated());

//        session()->flash('status', 'Post created successfully');

        return to_route('posts.index')
            ->with('status', 'Post created successfully');
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post){
//        hay qeu validar datos y actualizar la base de datos con los datos nuevos.
//        actualizar, guardar, avisar al usuario y actualizar el estado
//        $validated= $request->validate([
//           'title' => 'required | min:3',
//           'body' => 'required',
//        ]);

        $post->update( $request->validated() );

//        session()->flash('status', 'Post updated successfully!');
        return to_route('posts.show', $post)
            ->with('status', 'Post updated successfully');
    }

    public function destroy(Post $post){
//        return $post;
        //$post->delete();

        $post->delete();

        return to_route('posts.index')
            ->with('status', 'Post deleted successfully');

    }
}



