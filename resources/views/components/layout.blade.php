<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default Description' }}">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-sky-50 dark:bg-slate-950">
<x-partials.navigation/>

{{--mostrar mensajes flash de tipo estatus--}}
@session('status')
<div>
    {{ $value }}
</div>
@endsession

<main class="flex-1 p-4">
    {{ $slot }}
</main>



{{--@isset($sidebar)--}}
{{--    <div id="sidebar">--}}
{{--        <h3>Sidebar</h3>--}}
{{--        {{ $sidebar }}--}}
{{--    </div>--}}
{{--@endif--}}
</body>
</html>

