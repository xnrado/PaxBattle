<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div id="wrapper" class="relative flex flex-col" style="height: 80vh">
        <h1>Tytuł</h1>
        <div id="canvas-wrapper" class="h-full w-4/5 bg-amber-700 overflow-hidden self-center">
            <canvas id="game" class="h-screen"></canvas>
        </div>
        <p>footer</p>
    </div>
    @section('scripts')
        @vite('resources/js/battle/map')
    @endsection
</x-app-layout>
