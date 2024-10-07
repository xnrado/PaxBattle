<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-nord-6 leading-tight">
            {{ __('Bitwy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-nord-1 text-nord-6 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-cols-3 gap-3">
                    <div class="bg-amber-200 min-h-64 px-8">
                        <div class="bg-amber-600 h-48"></div>
                        <div class="truncate text-2xl accent-nord-6">Bitwa Kizgadzko-Nordycka</div>
                        <div class="grid grid-cols-5">
                            <div class="bg-[#2A6B11] h-8 flex gap-1 justify-center align-middle">
                                <img class="max-h-full max-w-full" alt="Karbadia" src="https://i.imgur.com/LT2l15E.png">
                            </div>
                            <div class="bg-[#2A6B99] h-8 flex gap-1 col-span-4">
                                Karbadia
                            </div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="bg-[#2A6B11] h-8 flex gap-1 justify-center align-middle">
                                <img class="max-h-full max-w-full" alt="Karbadia" src="https://i.imgur.com/LT2l15E.png">
                            </div>
                            <div class="bg-[#2A6B99] h-8 flex gap-1 col-span-4">
                                Karbadia
                            </div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="bg-[#2A6B11] h-8 flex gap-1 justify-center align-middle">
                                <img class="max-h-full max-w-full" alt="Karbadia" src="https://i.imgur.com/LT2l15E.png">
                            </div>
                            <div class="bg-[#2A6B99] h-8 flex gap-1 col-span-4">
                                Karbadia
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200">02</div>
                    <div class="bg-amber-200">03</div>
                    <div class="bg-blue-200">04</div>
                    <div class="bg-amber-200">05</div>
                    <div class="bg-blue-200">06</div>
                    <div class="bg-amber-200">07</div>
                    <div class="bg-blue-200">08</div>
                    <div class="bg-amber-200">09</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
