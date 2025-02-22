<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title & Description -->
    <title>Ron Hedwig Zape | Developer Portfolio & Magical Projects</title>
    <meta name="description" content="Explore Ron Hedwig Zape's developer portfolio inspired by the world of Harry Potter. Read the blog, view projects, and get in touch to discover a unique blend of coding wizardry and creativity.">
    <meta name="keywords" content="Developer Portfolio, Harry Potter, Blog, Projects, Contact, Coding, Wizardry, Ron Hedwig Zape">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Ron Hedwig Zape | Developer Portfolio & Magical Projects">
    <meta property="og:description" content="Explore Ron Hedwig Zape's developer portfolio inspired by Harry Potter. Discover captivating blog posts, innovative projects, and contact info for a magical coding experience.">
    <meta property="og:image" content="https://waytoomany.games/wp-content/uploads/2023/02/Fo1hKD_aAAA8x_9.jpg">
    <meta property="og:url" content="https://ronhedwigzape.com/">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ron Hedwig Zape | Developer Portfolio & Magical Projects">
    <meta name="twitter:description" content="Explore Ron Hedwig Zape's developer portfolio inspired by Harry Potter. Check out the blog, projects, and contact details for a magical coding journey.">
    <meta name="twitter:image" content="https://waytoomany.games/wp-content/uploads/2023/02/Fo1hKD_aAAA8x_9.jpg">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Background Styles -->
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
