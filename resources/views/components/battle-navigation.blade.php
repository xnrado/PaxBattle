<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('battles.show', ['slug' => $slug])" :active="request()->routeIs('battles.show')">
        {{ __('Bitwa') }}
    </x-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('battles.map', ['slug' => $slug])" :active="request()->routeIs('battles.map')">
        {{ __('Mapa') }}
    </x-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('battles.armies', ['slug' => $slug])" :active="request()->routeIs('battles.armies')">
        {{ __('Armie') }}
    </x-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('battles.actions', ['slug' => $slug])" :active="request()->routeIs('battles.actions')">
        {{ __('Akcje') }}
    </x-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('battles.options', ['slug' => $slug])" :active="request()->routeIs('battles.options')">
        {{ __('Opcje') }}
    </x-nav-link>
</div>
