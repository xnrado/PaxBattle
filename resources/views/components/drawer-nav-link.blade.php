@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 pb-1 w-full border-l-4 rounded bg-nord-1 border-nord-8 text-sm font-medium leading-6 text-nord-4 hover:bg-nord-2 hover:text-nord-5 transition duration-300 ease-in-out'
            : 'inline-flex items-center px-2 pt-1 pb-1 w-full border-l-4 rounded bg-nord-0 border-transparent text-sm font-medium leading-6 text-gray-500 hover:bg-nord-2 hover:text-nord-5 hover:border-nord-10 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
