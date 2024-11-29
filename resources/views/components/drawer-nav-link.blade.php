@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 pb-1 w-full border-l-4 rounded bg-nord-15 border-nord-8 text-sm font-medium leading-6 text-nord-4 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 pt-1 pb-1 w-full border-l-4 rounded bg-nord-14 border-transparent text-sm font-medium leading-6 text-gray-500 hover:bg-nord-15 hover:text-nord-5 hover:border-nord-13 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
