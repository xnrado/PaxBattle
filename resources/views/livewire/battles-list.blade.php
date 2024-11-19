<div class="p-6 grid grid-cols-3 gap-3">
    @foreach($battles as $battle)
        <div class="bg-nord-2 min-h-64 px-8">
            <a href="/battles/{{ $battle->slug }}">
                <div  class="h-48 flex justify-center items-center group">
                    <img alt="{{ asset('storage/img/battles/Unknown.png') }}" src="{{asset('storage/img/battles/'.$battle["image"])}}" class="duration-300 ease-in-out group-hover:scale-105 max-w-full max-h-full">
                </div>
            </a>
            <div class="truncate text-2xl accent-nord-6">{{ $battle->name }}</div>

            @for ($i = 0; $i < count($battle['country']); $i++)
                <div class="grid grid-cols-5 my-1 px-[3%] dmt-1 rounded text-gray-300 hover:text-nord-6 transition ease-in-out overflow-hidden" style="background: linear-gradient(90deg, {{ '#'.$battle->country[$i]->color }} 3%, #3b4252 3%, #3b4252 97%, {{ ($battle->user[$i]->id === Auth::id() ? '#5e81ac' : '#3b4252') }} 97%)">
                    <div class="row-span-1 flex justify-center align-middle h-8 p-0.5">
                        <img alt="{{ asset('storage/img/battles/Unknown.png') }}" src="{{asset('storage/img/countries/'. $battle->country[$i]->image)}}" class="max-h-full max-w-full drop-shadow-2xl" >
                    </div>
                    <div class="row-span-4 h-8 flex gap-1 col-span-4 items-center">
                        {{ $battle->country[$i]->name }}
                    </div>
                </div>
            @endfor
        </div>
    @endforeach
</div>
