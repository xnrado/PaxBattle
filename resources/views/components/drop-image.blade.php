<div>
    <div class="relative overflow-hidden w-full h-48 mt-1 flex justify-center rounded-lg border border-dashed border-nord-4/25">
        <div wire:loading wire:target="image" class="absolute z-50 w-full h-full bg-nord-0">
            <svg class="mx-auto my-auto" width="160" height="160" stroke="#d8dee9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>
        </div>
        @if ($this->image)
            <img class="w-full h-full object-cover" src="{{ $this->image->temporaryUrl() }}">
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
</div>
