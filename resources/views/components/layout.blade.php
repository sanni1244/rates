<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body class="">
    <nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Brand Name / Logo -->
        <div class="text-white font-bold text-2xl">
            <a href="#" class="hover:text-gray-400">BrandName</a>
        </div>
        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex space-x-8">
            <x-nav href="/" :active="request()->is('/')" >Home</x-nav>
            <x-nav href="/about" :active="request()->is('about')">About</x-nav>
            <x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>
            <x-nav href="/services" :active="request()->is('services')">Services</x-nav>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-gray-300 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="menu" class="md:hidden mt-4 hidden">
        <a href="/" class="block text-gray-300 py-2 px-4 hover:bg-gray-700 hover:text-white transition">Home</a>
        <a href="/about" class="block text-gray-300 py-2 px-4 hover:bg-gray-700 hover:text-white transition">About</a>
        <a href="/services" class="block text-gray-300 py-2 px-4 hover:bg-gray-700 hover:text-white transition">Services</a>
        <a href="/contact" class="block text-gray-300 py-2 px-4 hover:bg-gray-700 hover:text-white transition">Contact</a>
    </div>
</nav>

<script>
    // Toggle mobile menu
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Highlight active link (optional enhancement)
    // const currentLocation = location.href;
    // const menuItem = document.querySelectorAll('nav a');
    // const menuLength = menuItem.length;
    // for (let i = 0; i < menuLength; i++) {
    //     if (menuItem[i].href === currentLocation) {
    //         menuItem[i].classList.add('border-white', 'text-white');
    //     }
    // }
</script>

        {{$slot}}  

        <br>
        <h2>invincible</h2>
        {{$heading ?? "Null"}}

    </body>
</html>
