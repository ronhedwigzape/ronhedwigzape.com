<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Icon -->
        <link rel="icon" href="/favicon.svg">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Background -->
        @vite('resources/css/background.css')

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.9)), url('{{ asset('hogwarts.jpg') }}'); background-size: cover; background-attachment: fixed;">
    @inertia
    </body>
</html>
