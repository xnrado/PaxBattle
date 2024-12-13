<div class="w-full grid-container rounded">
    <div class="p-6 grid grid-cols-3 gap-3">
        @foreach($battles as $battle)
            <div class="bg-nord-2 min-h-64 px-8 rounded animate-fade-up animate-duration-500 animate-delay-500 animate-once">
                <a href="/battles/{{ $battle->slug }}">
                    <div  class="h-48 flex justify-center items-center group">
                        <img alt="{{ $battle->slug }}" src="{{asset('storage/'.$battle->image)}}" class="duration-300 ease-in-out group-hover:scale-105 max-w-full max-h-full">
                    </div>
                </a>
                <div class="truncate text-2xl accent-nord-6">{{ $battle->name }}</div>
                @for ($i = 0; $i < count($battle->countries); $i++)
                    <div class="grid grid-cols-5 my-1 px-[3%] dmt-1 rounded text-gray-300 hover:text-nord-6 transition ease-in-out overflow-hidden" style="background: linear-gradient(90deg, {{ '#'.$battle->countries[$i]->color }} 3%, #3b4252 3%, #3b4252 97%, {{ ($battle->users[$i]->id === Auth::id() ? '#5e81ac' : '#3b4252') }} 97%)">
                        <div class="row-span-1 flex justify-center align-middle h-8 p-0.5">
                            <img alt="{{ $battle->countries[$i]->slug }}" src="{{asset('storage/'. $battle->countries[$i]->image)}}" class="max-h-full max-w-full drop-shadow-2xl" >
                        </div>
                        <div class="row-span-4 h-8 flex gap-1 col-span-4 items-center">
                            {{ $battle->countries[$i]->name }}
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach
        <div class=" min-h-64 px-8 flex items-center justify-center rounded animate-fade-up animate-duration-500 animate-delay-500 animate-once">
            <a href="/battles/create" class="bg-nord-2/50 w-40 h-40 rounded-full flex items-center justify-center hover:bg-nord-2 transition duration-300 ease-in-out">
                <svg fill="#e5e9f0" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="96px" height="96px" viewBox="-4.54 -4.54 54.48 54.48" transform="rotate(90)" class="hover:rotate-0 transition duration-500 ease-in-out rounded-full">
                    <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

