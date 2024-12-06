<x-app-layout>
    <x-slot name="header">
        Bitwy
    </x-slot>
    {{--If successfully created a battle--}}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12">
        <div class="flex justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:battles-list lazy/>
        </div>
    </div>

</x-app-layout>
