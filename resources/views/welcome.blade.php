<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Descubre nuestra exclusiva colección de vehículos de lujo diseñados para la excelencia y el rendimiento supremo.">

    <title>Elite Motors | Automóviles de Lujo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:300,400,500,600,700|playfair-display:400,500,600,700"
        rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="font-sans antialiased text-gray-900 bg-white">
    <!-- Header/Navigation -->
    <header class="fixed w-full bg-black/80 backdrop-blur-md z-50">
        @include('partials.header')
    </header>

    <!-- Hero Section -->
    <section class="relative pt-16 md:pt-0 h-auto md:h-screen bg-black flex items-center">
        @include('partials.hero')
    </section>

    <!-- Models Section -->
    <section id="models" class="py-24 bg-gray-50">
        @include('partials.models')
    </section>

    <!-- Performance Section -->
    <section id="performance" class="py-24 bg-black text-white">
        @include('partials.performance')
    </section>

    <!-- Innovation Section -->
    <section id="innovation" class="py-24 bg-white">
        @include('partials.innovation')
    </section>

    <!-- Heritage Section -->
    <section id="heritage" class="py-24 bg-gray-900 text-white">
        @include('partials.heritage')
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-50">
        @include('partials.testimonials')
    </section>

    <!-- Lottery Section -->
     @if ($lottery)
    <section id="participate" class="py-24 bg-white">
        @include('partials.lottery')
    </section>
    @endif

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        @include('partials.footer')
    </footer>

    <!-- JavaScript -->
    @include('partials.scripts')
</body>
</html>
