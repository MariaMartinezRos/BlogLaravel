@props(['disabled' => false])

{{--cambiar colores aquí--}}
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-pink-400 dark:focus:border-pink-500 focus:ring-pink-400 dark:focus:ring-pink-500 rounded-md shadow-sm']) !!}>
