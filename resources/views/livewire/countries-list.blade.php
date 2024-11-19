<div class="p-6 grid grid-cols-3 gap-3">
    @foreach($countries as $country)
        <div class="bg-nord-2 min-h-64 px-8">
            <a href="/countries/{{ $country->id }}">
                <div  class="h-48 flex justify-center items-center group">
                    <img alt="{{ asset('storage/img/countries/Unknown.png') }}" src="{{asset('storage/img/countries/'.$country["image"])}}" class="duration-300 ease-in-out group-hover:scale-105 max-w-full max-h-full">
                </div>
            </a>
            <div class="truncate text-2xl accent-nord-6">{{ $country->name }}</div>

            @for ($i = 0; $i < count($country['user']); $i++)
                <div class="grid grid-cols-5 my-1 px-[3%] bg-nord-3 dmt-1 rounded text-gray-300 hover:text-nord-6 transition ease-in-out overflow-hidden">
                    <div class="row-span-1 flex justify-center align-middle h-8 p-0.5">
                        <img alt="{{ asset('storage/img/users/Unknown.png') }}" src="{{asset('storage/img/users/'.$country->user[$i]) }}" class="max-h-full max-w-full drop-shadow-2xl" >
                    </div>

                    <div class="row-span-4 h-8 flex gap-1 col-span-4 items-center">
                        {{ $country->user[$i]->name }}
                    </div>
                </div>
        @endfor
        </div>
    @endforeach
</div>
