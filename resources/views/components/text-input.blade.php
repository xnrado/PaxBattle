@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 block bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm text-nord-6 shadow-sm']) !!}>
