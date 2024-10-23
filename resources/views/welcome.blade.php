{{--@component('components.layout')--}}

{{--@endcomponent--}}

<x-blog-layout meta-title="Inicio" meta-description="Descripcion de la página de inicio">

    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Welcome
        </h1>

{{--        <p>{{Auth::user()}}</p>--}}
{{--        <p>{{ dd(Auth::user()) }}</p>--}}
    </div>

    <x-slot:sidebar>
        <p>Home Sidebar</p>
    </x-slot:sidebar>
</x-blog-layout>
