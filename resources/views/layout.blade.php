<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="danjohnson.xyz"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

        <title>danjohnson.xyz</title>

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
