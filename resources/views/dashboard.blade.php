<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <div id="wrapper" class="h-full flex flex-col">
        <h1>Tytuł</h1>
        <div id="canvas-wrapper" class="h-full w-4/5 bg-amber-700 overflow-hidden self-center">
            <canvas id="game" class="h-screen"></canvas>
        </div>
        <p>footer</p>
    </div>
</x-app-layout>

