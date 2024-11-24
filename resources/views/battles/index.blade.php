<x-app-layout>
    <x-slot name="header">
        Bitwy
    </x-slot>

    <div class="py-12">
        <div class="flex justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:battles-list lazy/>
        </div>
    </div>
</x-app-layout>
