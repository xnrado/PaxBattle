<div class="w-full grid-container">
{{--    <ul x-sort>--}}
{{--        <li x-sort:item>foo</li>--}}
{{--        <li x-sort:item>bar</li>--}}
{{--        <li x-sort:item>baz</li>--}}
{{--    </ul>--}}

    <div x-sort class="bg-nord-11 w-full h-40">
        @foreach($battle->country as $country)
            <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">
{{--                {{ $country }}--}}
                Heszke w meszke him: {{$country->name}}
            </div>
        @endforeach
        @foreach($battle->country as $country)
            <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">
                {{--                {{ $country }}--}}
                Heszke w meszke him: {{$country->name}}
            </div>
        @endforeach
    </div>


{{--    <div x-data="{ count: 0 }">--}}
{{--        <button x-on:click="count++">Increment</button>--}}

{{--        <span x-text="count"></span>--}}
{{--    </div>--}}
</div>
