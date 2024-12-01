<x-app-layout>
    <x-slot name="header">
        Tworzenie bitew
    </x-slot>

    <div class="">
        <form class="my-10 mx-auto max-w-screen-md px-8 text-nord-6" method="POST" enctype="multipart/form-data" action="/battles">
            @csrf
            <div class="pb-2 mb-2 border-b border-solid border-nord-1">
                <h1 class="text-2xl font-bold">Utwórz nową bitwę</h1>
                <span></span>
            </div>
            <div class="mt-4">
                <span class="italic">Wymagane pola są oznaczone gwiazdką (*).</span>
                <div class="mt-6"></div>
                <div class="border-b border-solid border-nord-1">
                    <div class="flex flex-col items-start mb-2">
                        <label class="block items-start" for="name">
                                <span class="flex">
                                    <div class="mr-1"><strong>Nazwa bitwy</strong></div>
                                    <span>*</span>
                                </span>
                        </label>
                        <span class="w-full">
                                <input id="name" name="name" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                            </span>
                    </div>

                    <div class="flex flex-col items-start mb-2">
                        <label class="block items-start" for="description">
                                <span class="flex">
                                    <div class="mr-1"><strong>Opis bitwy</strong></div>
                                </span>
                        </label>
                        <span class="w-full">
                                <input id="description" name="description" class="w-full mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                            </span>
                    </div>

                    <div class="flex flex-col items-start mb-2">
                        <div class="w-full mt-1 flex justify-center rounded-lg border border-dashed border-nord-4/25 px-6 py-10">
                            <div class="flex-col">
                                <svg class="mx-auto h-12 w-12 fill-nord-4" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex justify-center text-sm leading-6 text-nord-4">
                                    <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-nord-10 focus-within:outline-none focus-within:ring-2 focus-within:ring-nord-10 focus-within:ring-offset-2 hover:text-nord-10 px-2">
                                        <span>Załącz</span>
                                        <input id="image" name="image" type="file" class="sr-only" accept="image/jpeg, image/png, image/gif, image/webp">
                                    </label>
                                    <p class="pl-1">albo wrzuć</p>
                                </div>
                                <p class="text-xs leading-5 text-nord-5">PNG, JPG, GIF, WEBP do 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-solid border-nord-1">
                    <div class="mt-6">
                        <div class="grid grid-cols-5">
                            <div class="flex flex-col items-start mb-2 col-span-2">
                                <label class="block items-start" for="province_id">
                                <span class="flex">
                                    <div class="mr-1"><strong>Lokalizacja bitwy</strong></div>
                                    <span>*</span>
                                </span>
                                </label>
                                <span class="w-full">
                                <input id="province_id" name="province_id" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                            </span>

                            <div class="mt-16">
                                <label class="block items-start" for="x_size">
                                <span class="flex">
                                    <div class="mr-1"><strong>Szerokość pola bitwy</strong></div>
                                    <span>*</span>
                                </span>
                                </label>
                                <span class="w-full">
                                    <input id="x_size" name="x_size" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                                </span>
                            </div>
                            <div>
                                <label class="block items-start" for="y_size">
                                <span class="flex">
                                    <div class="mr-1"><strong>Wysokość pola bitwy</strong></div>
                                    <span>*</span>
                                </span>
                                </label>
                                <span class="w-full">
                                <input id="y_size" name="y_size" class="mt-1 bg-transparent px-2 py-1 rounded-md border-nord-1 items-stretch text-sm" type="text">
                                </span>
                            </div>

                            </div>
                            <div id="canvas-wrapper" class=" h-80 w-full bg-amber-700 overflow-hidden self-center col-span-3">
                                <canvas id="game"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>

</x-app-layout>
