<nav x-data="{ open: false }" class="bg-nord-dark border-b border-nord-1">
    <!-- Primary Navigation Menu -->
    <header>
        <div class="">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!--- Burger --->
                    <div class="text-center">
                        <button class="m-4 text-gray-300 p-2 rounded-[0.5rem] border-2 border-nord-1 hover:bg-nord-2 hover:text-white focus:outline-none" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h18 M4 12h18m-18 6h18" />
                            </svg>
                        </button>
                    </div>
                    <!--- Drawer component --->
                    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-nord-0 w-64 rounded-r-2xl border-[1px] border-nord-3 border-l-nord-0" tabindex="-1" aria-labelledby="drawer-navigation-label">
                        <x-application-logo class="block h-9 w-auto fill-current text-nord-4" />
                        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-nord-2 hover:text-nord-4 rounded-lg text-sm w-8 h-8 absolute top-4 right-2.5 inline-flex items-center justify-center" >
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <div class="py-4 overflow-y-auto">
                            <ul>
                                <li>
                                        <x-drawer-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">

                                            <svg class="w-5 h-5 text-gray-500 transition duration-75 float-left hover:text-nord-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                            </svg>

                                            {{ __('Dashboard') }}
                                        </x-drawer-nav-link>
                                </li>
                                <li>
                                    <x-drawer-nav-link :href="route('battles.index')" :active="request()->routeIs('battles.index')">

                                        <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                        </svg>

                                        {{ __('Bitwy') }}
                                    </x-drawer-nav-link>
                                </li>
                                <li>
                                    <x-drawer-nav-link :href="route('countries.index')" :active="request()->routeIs('countries.index')">

                                        <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                        </svg>

                                        {{ __('Kraje') }}
                                    </x-drawer-nav-link>
                                </li>
                            </ul>
                            <hr class="h-px my-2 border-0 bg-gray-700">
                        </div>
                    </div>


                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-nord-4" />
                        </a>
                    </div>
                </div>
                @isset($header)
                    <header class="flex justify-center">
                        <h2 class="flex align-middle items-center font-semibold text-l text-nord-6 leading-tight">
                            {{ $header }}
                        </h2>
                    </header>
                @endisset

                <!--- Avatar --->
                <div class="text-center">
                    <button class="inline-flex items-center m-1.5 text-gray-300 p-2 rounded-[0.5rem] border-2 border-nord-1 hover:bg-nord-2 hover:text-white focus:outline-none" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
                        <img class="h-8 w-8 rounded-full object-cover mr-2" src="{{ Auth::user()->getAvatar(['extension' => 'webp', 'size' => 64]) }}" alt="{{ Auth::user()->getTagAttribute() }}" />
                        <div style="display: flex; flex-direction: column; align-items: flex-start;">
                            {{ Auth::user()->getTagAttribute() }}
                            @if (Auth::user()->global_name)
                                <small>{{ Auth::user()->username }}</small>
                            @endif
                        </div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </div>
                <!--- Drawer component --->
                <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-nord-0 w-80 rounded-l-2xl border-[1px] border-nord-3 border-r-nord-0" tabindex="-1" aria-labelledby="drawer-right-label">
                    <div class="inline-flex items-center text-gray-300">
                        <img class="h-8 w-8 rounded-full object-cover mr-2" src="{{ Auth::user()->getAvatar(['extension' => 'webp', 'size' => 32]) }}" alt="{{ Auth::user()->getTagAttribute() }}" />
                        <div style="display: flex; flex-direction: column; align-items: flex-start;">
                            {{ Auth::user()->getTagAttribute() }}
                            @if (Auth::user()->global_name)
                                <small>{{ Auth::user()->username }}</small>
                            @endif
                        </div>
                    </div>
                    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-nord-2 hover:text-nord-4 rounded-lg text-sm w-8 h-8 absolute top-3.5 right-2.5 inline-flex items-center justify-center" >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <div class="py-4 overflow-y-auto">
                        <ul>
                            <li>
                                <x-drawer-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">

                                    <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                    </svg>

                                    {{ __('Profile') }}
                                </x-drawer-nav-link>
                            </li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-drawer-nav-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                    this.closest('form').submit();">

                                        <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                        </svg>

                                        {{ __('Log Out') }}
                                    </x-drawer-nav-link>
                                </form>
                            </li>
                        </ul>
                        <hr class="h-px my-2 border-0 bg-gray-700">
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
