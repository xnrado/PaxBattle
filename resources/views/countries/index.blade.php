<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-nord-6 leading-tight">
            {{ __('Kraje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-nord-2 text-nord-6 overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:countries-list lazy/>
            </div>
        </div>
    </div>
</x-app-layout>
