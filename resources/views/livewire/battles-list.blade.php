<div class="p-6 grid grid-cols-3 gap-3">
    @foreach($battles as $battle)
        <div class="bg-nord-2 min-h-64 px-8">
            <div class="h-48 flex justify-center items-center">
                <img alt="{{ $battle['battle_image'] }}" src="{{asset('storage/img/battles/'.$battle["battle_image"])}}">
            </div>
            <div class="truncate text-2xl accent-nord-6">{{ $battle['battle_title'] }}</div>

            @foreach($battle['battle_countries'] as $country)
                <div style="background-color: {{ $country['country_color'].'80' }}; color: {{ $country['text_color'] }}" class="mt-1 rounded">
                    <div class="grid grid-cols-5 h-full">
                        <div class="flex justify-center align-middle h-8 p-0.5">
                            <img class="max-h-full max-w-full drop-shadow-2xl" alt="{{ $country['country_image'] }}" src="storage/img/countries/{{ $country['country_image'] }}">
                        </div>
                        <div class="h-8 flex gap-1 col-span-4 items-center">
                            {{$country['country_name']}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach
</div>
