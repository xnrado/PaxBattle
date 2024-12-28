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
            <x-drop-image />
        {{-- Map --}}
        <div class="border-b border-solid border-nord-1">
            <div class="mt-6">
                {{-- Province --}}
                <div class="flex flex-col items-start mb-2">
                    <x-input-label for="province_id" :value="__('ID prowincji')" :required="true" />
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
                        <x-input-label for="x_size" :value="__('Szerokość pola bitwy')" :required="true" />
                        <span class="w-full">
                            <input wire:model.blur.debounce.50ms="x_size" id="x_size" name="x_size" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                        </span>
                        <x-input-validation field="x_size" />
                    </div>
                </div>
                {{-- Height --}}
                <div class="flex flex-col items-start mb-2">
                    <div>
                        <x-input-label for="y_size" :value="__('Wysokość pola bitwy')" :required="true" />
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
                <livewire:battle-armies-list :province_id="$province_id" :key="$province_id" lazy/>
            </div>
        </div>
    </div>
    Name: {{ var_export($name) }}<br>
    Active: <br>{{ var_export($active) }}<br>
        {{ var_export($image) }}
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Save
        </button>
    </div>
    </div>
</form>
