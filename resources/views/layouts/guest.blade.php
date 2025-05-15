<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ELITEMOTORS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black bg-opacity-90 bg-[url('/img/luxury-car-bg.jpg')] bg-cover bg-center bg-blend-multiply">
            <div class="mb-4">
                <a href="/">
                    <x-application-logo class="w-24 h-24 fill-current text-amber-500" />
                </a>
            </div>

            {{ $slot }}

            <div class="mt-8 text-center text-gray-400 text-sm">
                <p>© {{ date('Y') }} ELITEMOTORS. {{ __('Todos los derechos reservados.') }}</p>
            </div>
        </div>

        <!-- Background elegant pattern -->
        <div class="fixed inset-0 -z-10 bg-[url('/img/pattern.svg')] bg-opacity-5 pointer-events-none"></div>
    </body>
</html>
