<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-nord-2 text-nord-6 overflow-hidden shadow-sm sm:rounded-lg">

                {{ $battle }}

            </div>
        </div>
    </div>
</x-app-layout>
