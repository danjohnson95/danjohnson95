<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- EDCD24 --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('head')
    </head>
    {{-- <body class="bg-zinc-50 dark:bg-zinc-950 text-[#1b1b18] max-w-5xl mx-auto flex items-center lg:justify-center min-h-screen flex-col"> --}}
    <body class="bg-background">
        <div class="flex items-start w-full lg:grow text-[14px] leading-[26px] dark:text-[#EDEDEC]">
            <main class="w-full flex-col-reverse">
                    <header class="p-6 w-full flex items-center justify-center border-gray-100 dark:border-zinc-800 pb-4">
                        <x-logo/>
                    </header>

                    <div class="min-h-screen max-w-5xl mx-auto py-8 px-6 md:px-8">
                        @yield('content')
                    </div>
                <x-nav/>

                @include('footer')
            </main>
        </div>
    </body>
</html>
