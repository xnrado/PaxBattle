<div class="w-full bg-nord-dark text-nord-4">
    @if($this->countries->isEmpty())
        <p class="text-center text-lg font-semibold text-nord-3">Dodaj lokalizację bitwy</p>
        @if($editable)
            <x-input-validation field="active.factions.*" />
        @endif
    @else
        <!-- Factions Section -->
        <div
            @if($editable) x-sort x-sort:group="factions" @endif
        class="py-6 animate-fade-up animate-duration-500 animate-delay-500 animate-once">
            <h2 class="text-2xl font-bold text-nord-3 mb-4">Frakcje</h2>

            @if(isset($this->factions))
                @foreach($this->factions as $faction)
                    <div
                        x-sort:item="{{$faction->id}}"
                        x-data="{ factionsExpanded: true }"
                        class="flex flex-col mb-6 border border-nord-12 rounded-lg shadow-sm">

                        <!-- Faction Header -->
                        <div class="flex items-center justify-between p-4 bg-nord-11 rounded-t-lg">
                            <h1 class="text-lg font-medium text-nord-4">{{ $faction->name }}</h1>
                            <div class="flex items-center space-x-4">
                                <button type="button" class="px-4 py-1 text-sm font-semibold text-nord-2 bg-nord-3 rounded hover:bg-nord-2">Edit</button>
                                <div
                                    @click="factionsExpanded = !factionsExpanded"
                                    class="p-2 cursor-pointer transition-transform duration-300"
                                    :class="{ 'rotate-90': factionsExpanded }">
                                    <img
                                        class="h-5 w-5"
                                        src="{{ asset('storage/img/arrow-right.svg') }}"
                                        alt="Toggle">
                                </div>
                            </div>
                        </div>

                        <!-- Faction Countries -->
                        <div
                            x-show="factionsExpanded"
                            x-collapse
                            class="flex flex-col p-4 bg-nord-dark">
                            <div class="gap-4">
                                <div @if($editable) x-sort x-sort:group="countries" @endif>
                                    <p class="text-nord-3">HERE COMPONENT WITH COUNTRIES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Non-aligned Countries -->
        <div class="py-6 animate-fade-up animate-duration-500 animate-delay-500 animate-once">
            <h2 class="text-2xl font-bold text-nord-3 mb-4">Bez frakcji</h2>
            <div class="flex flex-col bg-nord-1 rounded-lg border border-nord-2 shadow">
                <div @if($editable) x-sort x-sort:group="countries" class="bg-nord-dark rounded-lg" @endif>
                    @foreach($this->countries as $country)
                        <div
                            @if($editable) x-sort:item="{{$country->id}}" @endif
                        x-data="{ countryExpanded: true }"
                            class="flex flex-col mb-4 border border-nord-2 rounded-lg">

                            <!-- Country Header -->
                            <div
                                class="flex items-center justify-between p-4 bg-nord-0 rounded-t-lg"
                                :class="$wire.active['factions']['']['countries'][{{$country->id}}]['active'] ? 'bg-nord-0' : 'bg-nord-dark'">
                                @if($editable)
                                    <div x-sort:handle class="px-2">
                                        <img
                                            class="h-5 w-5"
                                            src="{{ asset('storage/img/sort.svg') }}"
                                            alt="Sort">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <img
                                            class="h-8 w-8 rounded-full"
                                            src="{{ asset('storage/'.$country->image) }}"
                                            alt="{{ $country->slug }}">
                                        <div>
                                            <h2 class="text-lg font-semibold text-nord-4">{{ $country->name }}</h2>
                                            @if($editable)
                                                <select
                                                    wire:model.change="active.factions..countries.{{$country->id}}.user_id"
                                                    class="mt-1 bg-nord-dark px-3 py-1 rounded border border-nord-2 text-sm">
                                                    <option hidden value={{ null }}>Brak Gracza</option>
                                                    @foreach($this->users as $user)
                                                        <option value={{$user->id}}>{{$user->username}}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <span class="text-sm text-nord-3">{{"Username"}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="px-2">
                                        <input
                                            id="{{ $country->id }}"
                                            wire:model.defer="active.factions..countries.{{$country->id}}.active"
                                            class="h-4 w-4"
                                            type="checkbox">
                                    </div>
                                @endif

                                <div
                                    @click="countryExpanded = !countryExpanded"
                                    class="p-2 cursor-pointer transition-transform duration-300"
                                    :class="{ 'rotate-90': countryExpanded }">
                                    <img
                                        class="h-5 w-5"
                                        src="{{ asset('storage/img/arrow-right.svg') }}"
                                        alt="Toggle">
                                </div>
                            </div>

                            <!-- Armies -->
                            <div
                                @if($editable) x-sort x-sort:group="country-{{$country->id}}" @endif
                            x-show="countryExpanded"
                                x-collapse
                                class="flex flex-col p-4 rounded-b-lg bg-nord-dark">
                                @foreach($country->armies as $army)
                                    <div
                                        x-sort:item="{{$army->id}}"
                                        x-data="{ armyExpanded: true }"
                                        class="flex flex-col mb-4">

                                        <!-- Army Header -->
                                        <div
                                            class="flex items-center justify-between p-3 bg-nord-0 rounded-lg"
                                            :class="$wire.active['factions']['']['countries'][{{$country->id}}]['active'] && $wire.active['factions']['']['countries'][{{$country->id}}]['armies'][{{$army->id}}]['active'] ? 'bg-nord-1' : 'bg-nord-dark'">
                                            @if($editable)
                                                <div x-sort:handle class="px-2">
                                                    <img
                                                        class="h-5 w-5"
                                                        src="{{ asset('storage/img/sort.svg') }}"
                                                        alt="Sort">
                                                </div>
                                                <h3 class="text-sm font-medium text-nord-4">{{ $army->name }}</h3>
                                                <div class="px-2">
                                                    <input
                                                        wire:model.defer="active.factions..countries.{{$country->id}}.armies.{{$army->id}}.active"
                                                        class="h-4 w-4"
                                                        type="checkbox"
                                                        value="{{ $army->id }}">
                                                </div>
                                            @endif
                                            <div
                                                @click="armyExpanded = !armyExpanded"
                                                class="p-2 cursor-pointer transition-transform duration-300"
                                                :class="{ 'rotate-90': armyExpanded }">
                                                <img
                                                    src="{{ asset('storage/img/arrow-right.svg') }}"
                                                    alt="Toggle"
                                                    class="h-5 w-5">
                                            </div>
                                        </div>

                                        <!-- Units -->
                                        <div
                                            x-sort x-sort:group="army-{{$army->id}}"
                                            x-show="armyExpanded"
                                            x-collapse
                                            class="flex flex-col p-3 bg-nord-dark">
                                            @foreach($army->units as $unit)
                                                <div
                                                    x-sort:item="{{$unit->id}}"
                                                    x-data="{
                                                        unitManpower: {{ $unit->manpower }},
                                                        unitMaxManpower: {{$unit->unit_template->max_manpower}}
                                                    }"
                                                    class="flex items-center justify-between p-3 mb-2 bg-nord-0 rounded-lg">

                                                    <!-- Unit Header -->
                                                    <div
                                                        class="flex items-center rounded-lg space-x-4">
                                                        @if($editable)
                                                            <div x-sort:handle class="px-2">
                                                                <img
                                                                    class="h-5 w-5"
                                                                    src="{{ asset('storage/img/sort.svg') }}"
                                                                    alt="Sort">
                                                            </div>
                                                            <div class="px-2">
                                                                <input
                                                                    id="{{ $unit->id }}"
                                                                    wire:model.defer="active.factions..countries.{{$country->id}}.armies.{{$army->id}}.units.{{$unit->id}}.active"
                                                                    type="checkbox"
                                                                    class="h-4 w-4">
                                                            </div>
                                                        @endif
                                                        <img
                                                            class="h-6 w-6 rounded-full"
                                                            src="{{ asset('storage/'.$unit->unit_template->image) }}"
                                                            alt="{{ $country->slug }}">
                                                        <div>
                                                            <h4 class="text-sm font-medium text-nord-4">{{ $unit->name }}</h4>
                                                            <span class="text-xs text-nord-comment">{{ $unit->unit_template->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm text-nord-4 rounded-lg">
                                                        <span x-text="unitManpower"></span>/<span x-text="unitMaxManpower"></span>
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
    @endif
</div>
