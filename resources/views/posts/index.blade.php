<x-layout meta-title="Blog" meta-description="Descripcion de la página de blog">

    {{--  muestra los mensaejsd de post (store)--}}
{{--    <div>--}}
{{--        {{session('status')}}--}}
{{--    </div>--}}


    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Blog
        </h1>

        {{--        decoración css--}}
        <div class="flex items-center justify-center">
            <a 
                href="#"
                class="group rounded-full bg-sky-600 p-2 text-sky-100 shadow-lg duration-300 hover:bg-sky-700 active:bg-sky-800"
            >
                <svg
                    class="h-6 w-6 duration-300 group-hover:rotate-12"
                    data-slot="icon"
                    fill="none"
                    stroke-width="1.5"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15"
                    ></path>
                </svg>
            </a>
        </div>

    </div>


    <a href="{{route('posts.create')}}">{{__('Create a new Post')}}</a>
    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{route('posts.show',$post)}}">{{ $post->title }}</a>
            </h2>

            <a href="{{ route('posts.edit', $post) }}">Edit</a>

            <form action="{{ route('posts.destroy',$post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</x-layout>


