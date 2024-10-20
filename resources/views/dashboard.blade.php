<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-nord-4 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-full h-[calc(100vh-8.5rem-2px)] p-8 bg-nord3">
        <div id="map-container" class="max-w-full max-h-full aspect-square overflow-hidden bg-red-700">
            <svg class="transition ease-in-out" height="100%" viewBox="0 0 3258 3258" xmlns="http://www.w3.org/2000/svg">
                <g stroke="#000" stroke-linejoin="bevel" stroke-width="1.0">
                    <g fill="#ffffff">
                        @foreach($provinces as $province)
                            <path id="{{ $province->id }}" style="fill: {{ '#'.$province->color.'E6' }}" class="custom" d="{{ $province->svg }}"/>
                        @endforeach
                    </g>
                </g>
            </svg>
        </div>
    </div>
</x-app-layout>

