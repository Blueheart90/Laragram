<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laragram - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 ">
    <header class="p-5 bg-white border-b shadow ">
        <div class="container flex items-center justify-between mx-auto">
            <h1 class="text-3xl font-black">Laragram</h1>
            <nav>
                <a class="text-sm font-bold text-gray-600 uppercase" href="#">Login</a>
                <a class="text-sm font-bold text-gray-600 uppercase" href="/crear-cuenta">Crear Cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10 ">
        <h2 class="mb-10 text-3xl font-black text-center ">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="mt-10 p-5 font-bold text-center text-gray-500 ">
        Laragram - Todos los derechos reservados
        {{ now()->year }}
    </footer>

</body>
</html>
