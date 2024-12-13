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
            <div class=" flex flex-col items-center h-full">
                <div class="relative flex flex-row rounded-3xl bg-nord-0 p-4 px-20 -mt-16 z-20 max-w-7xl">
                    <h1 class="text-6xl line-clamp-1 font-bold max-w-fit min-h-16 hover:line-clamp-none"> {{ $battle->name }} </h1>
                </div>
                @if(!empty($battle->description))
                    <div class="relative flex flex-col rounded-3xl bg-nord-0 p-4 px-40 pt-20 -mt-14 min-w-[40rem] max-w-7xl">
                        <div class=" pt-4"> {{ $battle->description }} </div>
                        <hr class="h-px w-full border-0 my-4 bg-nord-1">
                    </div>
                @endif

            </div>

{{--            {{ $battle }}--}}
            <livewire:view-battle-armies-list :battle_id="$battle->id" lazy/>
        </div>
    </div>
</x-app-layout>
