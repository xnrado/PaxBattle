<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-nord-6 leading-tight">
            {{ __('Bitwy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-nord-2 text-nord-6 overflow-hidden shadow-sm sm:rounded-lg">
{{--                {{ Http::withHeaders([--}}
{{--                'Authorization' => env('DISCORD_API_AUTH')--}}
{{--                ])->get('https://discordapp.com/api/guilds/917078941213261914/members?limit=3') }}--}}

                <livewire:battles-list lazy/>

            </div>
        </div>
    </div>
</x-app-layout>
