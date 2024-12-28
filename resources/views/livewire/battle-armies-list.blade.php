<div class="w-full text-nord-4">
    @if($this->countries->isEmpty())
        Brak armii w prowincji.
        @if($editable) <x-input-validation field="active.factions.*" /> @endif
    @else
            Frakcje
        <div @if($editable) x-sort x-sort:group="factions" @endif class="py-4 animate-fade-up animate-duration-500 animate-delay-500 animate-once">
                {{-- Faction --}}
            @if(isset($this->factions))
                @foreach($this->factions  as $faction)
                    <div x-sort:item="{{$faction->id}}" x-data="{ factionsExpanded: true }" class="flex flex-col">
                        {{-- FactionBar --}}
                        <div class="pb-2 pl-2" style="background: {{'#'.$faction->color}}">
                            <div class="flex flex-row bg-nord-0 h-16 w-full">
                                <h1>{{ $faction->name }}</h1>

                                <button type="button" class="text-sm font-semibold leading-6 text-nord-comment">Edit</button>

                                <div @click="factionsExpanded = ! factionsExpanded" class="px-2 py-2 transition-transform duration-400" :class="{ 'rotate-90': factionsExpanded }">
                                    <img class="h-full w-auto aspect-square drop-shadow-l" src="{{ asset('storage/img/arrow-right.svg') }}" alt="Toggle">
                                </div>
                            </div>
                        </div>
                        {{-- Countries --}}
                        <div x-show="factionsExpanded" x-collapse class="flex flex-col pl-2 bg-nord-10" style="background: {{'#'.$faction->color}}">
                            <div class="gap-4" :class="factionsActive ? 'bg-nord-0' : 'bg-nord-dark'">
                                <div @if($editable) x-sort x-sort:group="countries" @endif>
                                    {{-- Country --}}
                                    <x-battle-armies-list-countries :countries="$faction->countries" :factionid="$faction->id"/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
            {{-- Non-aligned --}}
            <div class="py-4 animate-fade-up animate-duration-500 animate-delay-500 animate-once">
            Bez frakcji
                {{-- Countries --}}
                <div class="flex flex-col py-2 overflow-hidden bg-nord-0 rounded-lg border border-dashed border-nord-4/25">
                    <div @if($editable) x-sort x-sort:group="countries" @endif>
                        {{-- Country --}}
                        <x-battle-armies-list-countries :countries="$this->countries" :factionid="null"/>
                    </div>
                </div>
{{--                <x-input-validation field="active.factions.*.countries.*.user_id" />--}}
            </div>

    @endif
</div>
