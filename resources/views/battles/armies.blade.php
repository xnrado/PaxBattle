<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div class="py-12">
        <div class="flex justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:view-battle-armies-list lazy :battle_id="$battle->id" :editable="true"/>
        </div>
    </div>
</x-app-layout>
