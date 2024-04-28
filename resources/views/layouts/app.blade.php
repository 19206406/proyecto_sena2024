<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'proyecto_sena2024')</title>
    <link rel="stylesheet" href="resources\css\varios.css">
    @vite('resources/css/app.css')
</head>
<body>
    <head>
        {{-- Navbar --}}
        @include('layouts.navbar')
        <div class=" my-5 p-6 ">
            <h2 class=" text-cyan-700 text-center text-lg font-bold font-sans text-3xl">¡¡Bienvenido de nuevo {{ $nombre }}!!</h2>
        </div>
    </head>
    <main>
        @yield('contenido')
    </main>
    @include('layouts.footer')
</body>
</html>