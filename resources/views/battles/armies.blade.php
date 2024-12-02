<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div class="py-12">
        <div class="flex justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:battle-armies-list lazy :slug="$battle->slug"/>
        </div>
    </div>
</x-app-layout>
