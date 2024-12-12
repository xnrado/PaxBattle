<div class="w-full">
    @if($this->countries->isEmpty())
        Dodaj lokalizację bitwy
        <x-input-validation field="active.factions.*" />
    @else
{{--            <div x-sort x-sort:group="factions" class="py-4 animate-fade-up animate-duration-500 animate-delay-500 animate-once">--}}
{{--                --}}{{-- Faction--}}
{{--                <div x-sort:item="1" x-data="{ factionsExpanded: true, factionsActive: true }" class="flex flex-col">--}}
{{--                    --}}{{-- factionsBar--}}
{{--                    <div class="pb-2 pl-2" style="background: crimson">--}}
{{--                        <div class="flex flex-row h-16 w-full" :class="factionsActive ? 'bg-nord-0' : 'bg-nord-dark'">--}}
{{--                            <div x-sort:handle class="px-1 py-2">--}}
{{--                                <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/sort.svg') }}" alt="Sort">--}}
{{--                            </div>--}}

{{--                            <div class="px-1 py-4">--}}
{{--                                <input x-model="factionsActive" class="h-full w-auto aspect-square" type="checkbox" id="{{ "1" }}" name="factions">--}}
{{--                            </div>--}}


{{--                            <h1>{{ "DUMMY_factions_NAME" }}</h1>--}}
{{--                            <button type="button" class="text-sm font-semibold leading-6 text-nord-comment">Edit</button>--}}


{{--                            <div @click="factionsExpanded = ! factionsExpanded" class="px-2 py-2 transition-transform duration-400" :class="{ 'rotate-90': factionsExpanded }">--}}
{{--                                <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/arrow-right.svg') }}" alt="Toggle">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{-- Countries --}}
{{--                    <div x-show="factionsExpanded" x-collapse class="flex flex-col pl-2 bg-nord-10" style="background: crimson">--}}
{{--                        <div class="gap-4" :class="factionsActive ? 'bg-nord-0' : 'bg-nord-dark'">--}}
{{--                            <div x-sort x-sort:group="countries"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div x-sort x-sort:group="factions" class="py-4 animate-fade-up animate-duration-500 animate-delay-500 animate-once">
            Bez frakcji
                {{-- Countries --}}
                <div class="flex flex-col bg-nord-0 rounded-lg border border-dashed border-nord-4/25">
                    <div x-sort x-sort:group="countries">
                        {{-- Country --}}
                        @foreach($this->countries as $country)
                            <div x-sort:item="{{$country->id}}" x-data="{ countryExpanded: true }" class="flex flex-col">
                                {{-- CountryBar --}}
                                <div class="flex flex-row w-full h-14 pl-4" :class="$wire.active['factions'][0]['countries'][{{$country->id}}]['active'] ? '' : 'bg-nord-dark'">
                                    <div x-sort:handle class="px-1 py-2">
                                        <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/sort.svg') }}" alt="Sort">
                                    </div>

                                    <div class="px-1 py-3">
                                        <input id="{{ $country->id }}" wire:model.defer="active.factions.0.countries.{{$country->id}}.active" class="h-full w-auto aspect-square" type="checkbox">
                                    </div>

                                    <div class="px-1 py-1">
                                        <img class="h-full w-auto drop-shadow-l" src="{{ asset('storage/'.$country->image) }}" alt="{{ $country->slug }}" >
                                    </div>

                                    <div class="flex flex-col">
                                        <h2>{{ $country->name }}</h2>
                                        <select wire:model.change="active.factions.0.countries.{{$country->id}}.user_id" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm">
                                            <option hidden value={{ null }}>Brak Gracza</option>
                                            @foreach($this->users as $user)
                                                <option value={{$user->id}}>{{$user->username}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div @click="countryExpanded = ! countryExpanded" class="px-2 py-2 transition-transform duration-400" :class="{ 'rotate-90': countryExpanded }">
                                        <img class="h-full w-auto drop-shadow-l" src="{{ asset('storage/img/arrow-right.svg') }}" alt="Toggle">
                                    </div>
                                </div>
                {{-- Armies --}}
                <div x-sort x-sort:group="country-{{$country->id}}" x-show="countryExpanded" x-collapse class="flex flex-col">
                    {{-- Army --}}
                    @foreach($country->armies as $army)
                        <div x-sort:item="{{$army->id}}" x-data="{ armyExpanded: true }" class="flex flex-col">
                            {{-- ArmyBar --}}
                            <div class="flex flex-row h-12 pl-12" :class="$wire.active['factions'][0]['countries'][{{$country->id}}]['active'] && $wire.active['factions'][0]['countries'][{{$country->id}}]['armies'][{{$army->id}}]['active'] ? '' : 'bg-nord-dark'">
                                <div x-sort:handle class="px-1 py-2">
                                    <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/sort.svg') }}" alt="Sort" >
                                </div>

                                <div class="px-1 py-3">
                                    <input  wire:model.defer="active.factions.0.countries.{{$country->id}}.armies.{{$army->id}}.active" class="h-full w-auto aspect-square" type="checkbox" value="{{ $army->id }}">
                                </div>

                                <h3>{{ $army->name }}</h3>

                                <div @click="armyExpanded = ! armyExpanded" class="px-2 py-2 w-12 transition-transform duration-400" :class="{ 'rotate-90': armyExpanded }">
                                    <img src="{{ asset('storage/img/arrow-right.svg') }}" alt="Toggle" class="drop-shadow-l h-full">
                                </div>
                            </div>
                {{-- Units --}}
                <div x-sort x-sort:group="army-{{$army->id}}" x-show="armyExpanded" x-collapse class="flex flex-col">
                    @foreach($army->units as $unit)
                        <div x-sort:item="{{$army->id}}" x-data="{ unitManpower: {{ $unit->manpower }}, unitMaxManpower: {{$unit->unit_template->max_manpower}} }" class="flex flex-col">
                            {{-- UnitBar --}}
                            <div class="relative flex flex-row h-12 pl-20" :class="$wire.active['factions'][0]['countries'][{{$country->id}}]['active'] && $wire.active['factions'][0]['countries'][{{$country->id}}]['armies'][{{$army->id}}]['active'] && $wire.active['factions'][0]['countries'][{{$country->id}}]['armies'][{{$army->id}}]['units'][{{$unit->id}}]['active'] ? '' : 'bg-nord-dark'">

                                <div x-sort:handle class="px-1 py-2">
                                    <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/sort.svg') }}" alt="Sort">
                                </div>

                                <div class="px-1 py-3">
                                    <input id="{{ $unit->id }}" wire:model.defer="active.factions.0.countries.{{$country->id}}.armies.{{$army->id}}.units.{{$unit->id}}.active" type="checkbox" class="h-full w-auto aspect-square">
                                </div>

                                <div class="px-1 py-1">
                                    <img class="h-full w-auto drop-shadow-l" src="{{ asset('storage/'.$unit->unit_template->image) }}" alt="{{ $country->slug }}" >
                                </div>

                                <div>
                                    <h4>{{ $unit->name }}</h4>
                                    <span class="text-nord-comment">{{ $unit->unit_template->name }}</span>
                                </div>

                                <span x-text="unitManpower"></span><span>/</span><span x-text="unitMaxManpower"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
                        </div>
                    @endforeach
                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <x-input-validation field="active.factions.*.countries.*.user_id" />
            </div>


{{--            <div x-sort x-sort:group="army" class="bg-nord-12 w-full h-40">--}}
{{--                @foreach($province->army as $country)--}}
{{--                    <div x-sort:item class="py-3 px-6 rounded-3xl font-medium" style="background: {{ '#'.$country->color }}">--}}
{{--                        Heszke w meszke him: {{$country->name}}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

    @endif
</div>
