<form wire:submit="submit" class="py-10 mx-auto max-w-screen-md text-nord-6">
    @csrf
    <div class="pb-2 mb-2 border-b border-solid border-nord-1">
        <h1 class="text-2xl font-bold">Utwórz nową bitwę</h1>
        <span></span>
    </div>
    <div class="mt-4">
        <span class="italic">Wymagane pola są oznaczone gwiazdką (*).</span>
        <div class="mt-6"></div>
        {{-- Basic --}}
        <div class="border-b border-solid border-nord-1 space-y-2 pb-2">
            {{-- Name --}}
            <div>
                <x-input-label for="name" :value="__('Nazwa bitwy')" :required="true" />
                <x-text-input wire:model.blur.debounce.50ms="name" id="name" name="name" type="text" />
                <x-input-validation field="name" />
            </div>
            {{-- Description --}}
            <div>
                <x-input-label for="description" :value="__('Opis bitwy')" />
                <x-text-input wire:model.blur.debounce.50ms="description" id="description" name="description" type="text" class="w-full"/>
                <x-input-validation field="description" />
            </div>
            {{-- Image --}}
            <div class="relative w-full h-48 mt-1 flex justify-center rounded-lg border border-dashed border-nord-4/25">
                <div wire:loading wire:target="image" class="absolute z-50 w-full h-full bg-nord-0">
                    <svg class="mx-auto my-auto" width="160" height="160" stroke="#d8dee9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>
                </div>
                @if ($image)
                    <img class="w-full h-full object-cover" src="{{ $image->temporaryUrl() }}">
                    <label for="image"
                           class="absolute right-2 bottom-2 cursor-pointer rounded-md bg-white font-semibold text-nord-10 border-nord-0 border-solid border focus-within:outline-none focus-within:ring-2 focus-within:ring-nord-10 focus-within:ring-offset-2 hover:text-nord-10 px-2">
                        <span>Zmień</span>
                    </label>
                @else
                    <div class="flex flex-col justify-center items-center">
                        <svg class="mx-auto h-12 w-12 fill-nord-4" viewBox="0 0 24 24" aria-hidden="true"
                             data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <div class="mt-4 flex justify-center text-sm leading-6 text-nord-4">
                            <label for="image"
                                   class="relative cursor-pointer rounded-md bg-white font-semibold text-nord-10 focus-within:outline-none focus-within:ring-2 focus-within:ring-nord-10 focus-within:ring-offset-2 hover:text-nord-10 px-2">
                                <span>Załącz</span>
                            </label>
                            <p class="pl-1">albo wrzuć</p>
                        </div>
                        <div class="text-xs leading-5 text-nord-5 w-fit">Obrazek do 10MB</div>
                    </div>
                @endif
            </div>
            <input wire:model="image" id="image" type="file" class="hidden">
            <x-input-validation field="image" />

        {{-- Map --}}
        <div class="border-b border-solid border-nord-1">
            <div class="mt-6">
                {{-- Province --}}
                <div class="flex flex-col items-start mb-2">
                    <label class="block items-start" for="province_id">
                        <span class="flex">
                            <div class="mr-1"><strong>ID prowincji</strong></div>
                            <span>*</span>
                        </span>
                    </label>
                    <span class="w-full">
                        <select wire:model.change.lazy="province_id" id="province_id" name="province_id" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 text-nord-4 items-stretch text-sm">
                            @foreach($this->provinces as $province)
                                <option value={{$province->id}}>{{"(".$province->id.") ".$province->name}}</option>
                            @endforeach
                        </select>
                    </span>
                    <x-input-validation field="province_id" />
                </div>
                {{-- Width --}}
                <div class="flex flex-col items-start mb-2">
                    <div>
                        <label class="block items-start" for="x_size">
                            <span class="flex">
                                <div class="mr-1"><strong>Szerokość pola bitwy</strong></div>
                                <span>*</span>
                            </span>
                        </label>
                        <span class="w-full">
                            <input wire:model.blur.debounce.50ms="x_size" id="x_size" name="x_size" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                        </span>
                        <x-input-validation field="x_size" />
                    </div>
                </div>
                {{-- Height --}}
                <div class="flex flex-col items-start mb-2">
                    <div>
                        <label class="block items-start" for="y_size">
                            <span class="flex">
                                <div class="mr-1"><strong>Wysokość pola bitwy</strong></div>
                                <span>*</span>
                            </span>
                        </label>
                        <span class="w-full">
                            <input wire:model.blur.debounce.50ms="y_size" id="y_size" name="y_size" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                        </span>
                        <x-input-validation field="y_size" />
                    </div>
                </div>
            </div>
        </div>
        {{-- Armies --}}
        <div class="border-b border-solid border-nord-1">
            <div class="mt-6">
{{--                {{ $province_id }}--}}
                <livewire:battle-armies-list :province_id="$province_id" :key="$province_id" lazy/>
            </div>
        </div>
    </div>
    Name: {{ var_export($name) }}<br>
    Active: <br>{{ var_export($active) }}<br>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Save
        </button>
    </div>
    </div>
</form>
