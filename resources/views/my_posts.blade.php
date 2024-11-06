@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Posts</h1>
    @if($posts->isEmpty())
        <p>No tienes posts.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
