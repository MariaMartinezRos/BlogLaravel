<x-layout meta-title="Blog" meta-description="Descripcion de la página de blog">

    {{--  muestra los mensaejsd de post (store)--}}
{{--    <div>--}}
{{--        {{session('status')}}--}}
{{--    </div>--}}


        <h1>Blog</h1>
    <a href="{{route('posts.create')}}">{{__('Create a new Post')}}</a>
    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2><a href="{{route('posts.show',$post)}}">{{ $post->title }}</a></h2>
        </div>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    @endforeach
</x-layout>


