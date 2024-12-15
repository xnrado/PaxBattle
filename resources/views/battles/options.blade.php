<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div class="py-10 mx-auto max-w-screen-md text-nord-6">
        {{ $battle }}
    </div>
</x-app-layout>
