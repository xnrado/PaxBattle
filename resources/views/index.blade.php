<?php
use Illuminate\Support\Facades\Storage;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pax Zeonica</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.ts'])

</head>
<body>
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-nord0 py-6 sm:py-12">
    <div class="relative flex bg-nord1 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-xl sm:rounded-lg sm:px-10">
        <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative flex flex-col items-center w-full max-w-2xl px-6 lg:max-w-xl">

                <div class="relative flex lg:justify-center lg:col-start-2">
                    <img src="{{ asset('storage/img/terra.png' ) }}" alt="Terra" class="drop-shadow-l">
                </div>
                <div class="pt-16"></div>
                <button type="button" class="text-white bg-nord9 hover:bg-nord10 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-1.5 text-center inline-flex items-center me-2 mb-2">
                    <img src="{{ asset('storage/img/discord.svg') }}" alt="" class="drop-shadow-l w-4 h-4 me-2">
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Sign in with Discord
                    </a>
                </button>


                <main class="mt-6">
                    @if (session()->has('error'))
                        <div class="dark:bg-red-800/20 rounded-lg p-4 mb-4 text-sm mt-16" style="color: rgba(247, 0, 0, 0.7); background-color: white; padding: 15px 15px; margin: 2rem;" role="alert">
                            <svg style="display: inline-flex; width: 2rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>

                            <span class="font-medium">
                                    <strong>{{ __('Something went wrong!') }}</strong>
                                </span> {!! session()->get('error') !!}
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="dark:bg-red-800/20 rounded-lg p-4 mb-4 text-sm mt-16" style="color: rgba(70, 255, 0, 1); background-color: white; padding: 15px 15px; margin: 2rem;" role="alert">
                            <svg style="display: inline-flex; width: 2rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>

                            <span class="font-medium">
                                    <strong>{{ __('Success') }}!</strong>
                                </span> {!! session()->get('success') !!}
                        </div>
                    @endif

                </main>

                <footer class="py-8 text-center text-sm text-nord3">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) | Larascord v{{ \Jakyeru\Larascord\LarascordServiceProvider::VERSION }}
                </footer>
            </div>
        </div>
    </div>
</div>
</body>
</html>
