<nav x-data="{ open: false }" class="bg-nord-dark px-4">
    <!-- Primary Navigation Menu -->
    <nav>

    </nav>
    <header>
        <div class="">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Navigation Links -->
{{--                    {{dd($type->slug)}}--}}
{{--                    @if($type instanceof \App\Models\Battle)--}}
{{--                        TESTTEST--}}
                        <x-battle-navigation :slug="$type->slug" />
{{--                    @endif--}}
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </header>
</nav>
