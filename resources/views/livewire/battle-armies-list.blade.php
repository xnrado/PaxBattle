<div class="w-full">
    @if($countries->isEmpty())
        Dodaj lokalizację bitwy

    @else
        @foreach($countries as $country)
            {{-- Side --}}
            <div x-data="{ expanded: true }" class="flex flex-col">
                <div class="h-14 pb-2 pl-2" style="background: {{ '#'.$country->color }}">
                    <div class="flex flex-row h-full w-full bg-nord-0">
                        <div class="px-2 py-2">
                            <img src="{{ asset('storage/img/sort.svg') }}" alt="Sort" class="drop-shadow-l h-full">
                        </div>
                        <h2>{{ $country->name }}</h2>
                        <div @click="expanded = ! expanded" class="px-2 py-2 transition-transform duration-400" :class="{ 'rotate-90': expanded }">
                            <img src="{{ asset('storage/img/arrow-right.svg') }}" alt="Toggle" class="drop-shadow-l h-full">
                        </div>
                    </div>
                </div>
                <div x-show="expanded" x-collapse class="flex flex-col pl-4 bg-nord-10">
                    <div class="bg-nord-0 gap-4">
                        <div class="bg-nord-0">
                            {{ $country }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
{{--            <div x-sort x-sort:group="army" class="bg-nord-12 w-full h-40">--}}
{{--                @foreach($province->army as $country)--}}
{{--                    <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">--}}
{{--                        Heszke w meszke him: {{$country->name}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
    @endif
</div>
