<x-layout meta-title="Blog" meta-description="Descripcion de la página de blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach
</x-layout>
