<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <header class="bg-[#DA291C] text-white shadow-md fixed top-0 left-0 right-0 md:relative">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

            <h1 class="text-xl font-bold">Capstone Team 2</h1>

            <input type="checkbox" id="menu-toggle" class="hidden peer">

            <label for="menu-toggle" class="md:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>

            <nav
                class="transition-all  duration-300 hidden peer-checked:flex flex-col absolute top-16 left-0 w-full bg-blue-800 md:static md:flex md:flex-row md:w-auto md:space-x-4 md:bg-transparent z-50">
                <a href="/" class="block px-4 py-2 hover:underline">Home</a>
                <a href="/about" class="block px-4 py-2 hover:underline">About</a>
                <a href="/blog" class="block px-4 py-2 hover:underline">Blog</a>
                <a href="/contact" class="block px-4 py-2 hover:underline">Contact</a>
            </nav>

        </div>
    </header>

    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-6 mt-20 md:mt-0">
        @yield('content')
    </main>

    <footer class="bg-white shadow-inner mt-10">
        <div class="max-w-6xl mx-auto px-4 py-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} Capstone Team 2.
        </div>
    </footer>

</body>

</html>
