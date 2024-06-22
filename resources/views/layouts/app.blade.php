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
        @include('layouts.navbar2')
        <div class=" my-5 p-6 ">
            <h2 class=" text-cyan-700 text-center text-lg font-bold font-sans text-3xl">¡¡Bienvenido de nuevo!!</h2>
        </div>
        <div class="bg-blue-50 my-4 text-center">
            <h1 class="text-lg font-semibold m-4 uppercase">@yield('cabecera')</h1>
        </div>
    </head>
    <main>
        @yield('contenido')
    </main>
    @include('layouts.footer2')
</body>
</html>