{{--crear un formulario--}}

<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>{{__('Create a new Post')}}</h1>

{{--    esta variable la cea el lenguaje cuando hay un errror--}}
{{--    @dump($errors)--}}

{{--    @foreach($errors->all() as $error)--}}
{{--        <div>{{ $error }}</div>--}}
{{--    @endforeach--}}

    <form method="POST" action="{{route('posts.store')}}">
        @csrf

        @include('posts.form-fields')

        <br/>
        <button type="submit">{{__('Send')}}</button>
        <br/>
    </form>
    <a href="{{route('posts.index')}}">{{__('Back')}}</a>

</x-layout>
