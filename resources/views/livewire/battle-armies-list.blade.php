<div class="w-full">
    @if(!$battle)
        Dodaj lokalizację bitwy
    @else
        <div x-sort class="bg-nord-11 w-full h-40">
            @foreach($battle->country as $country)
                <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">
                    Heszke w meszke him: {{$country->name}}
                </div>
            @endforeach
            @foreach($battle->country as $country)
                <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">
                    Heszke w meszke him: {{$country->name}}
                </div>
            @endforeach
        </div>
    @endif

</div>
