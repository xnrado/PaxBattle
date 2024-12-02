<x-app-layout>
    <x-slot name="header">
        {{ __($battle->name) }}
    </x-slot>
    @include('layouts.local-navigation', ['type' => $battle])

    <div class="pb-12 mt-3 z-10">
        <div class="flex flex-col items-center">
            <img class="w-11/12 object-cover h-64 rounded" src="{{asset('storage/'.$battle->image)}}" alt="{{ $battle->slug }}">
        </div>
        <div class="w-full px-32 text-nord-4 flex flex-col items-center">
            <div class=" flex flex-col items-center rounded-md shadow-2xl h-full">
                <div class="relative flex flex-row rounded-3xl bg-nord-0 p-4 px-40 -mt-16 z-20">
                    <h1 class="text-6xl font-bold max-w-fit "> {{ $battle->name }} </h1>
                </div>
                <div class="relative flex flex-col rounded-3xl bg-nord-0 p-4 px-40 pt-20 -mt-14">
                    <div class=" pt-4"> {{ $battle->description }} </div>
                    <hr class="h-px w-full border-0 my-4 bg-nord-1">
                </div>

            </div>

            {{ $battle }}

        </div>
    </div>
</x-app-layout>
