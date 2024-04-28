<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heladeria</title>
    @vite('resources/css/app.css')

    <style>

        #background {
            min-height: 100vh;
            background: url('https://th.bing.com/th/id/R.9ffe46085699fdcde31f5dfd5a031f50?rik=f9a%2bsdkE7gJpeA&pid=ImgRaw&r=0') no-repeat center center fixed;
            background-size: cover;
        }

    </style> 
</head>
<body>
    
    <head>

        <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">

            <div>
                <span class="">
                    <h2 class="text-cyan-700 font-semibold font-sans text-2xl">¡¡Heladeria Dulce!!</h2>
                </span>
            </div>

            <ul class="md:flex md:items-center">
                <li class="mx-4 my-6 md:my-0  bg-cyan-500 text-white duration-500 px-6 py-2 hover:bg-cyan-600 rounded">
                    <a class="text-xl hover:text-white duration-500">Iniciar sesión</a>
                </li>
                <li class="mx-4 my-6 md:my-0  bg-cyan-500 text-white duration-500 px-6 py-2 hover:bg-cyan-600 rounded">
                    <a class="text-xl hover:text-white duration-500">Registrarse</a>
                </li>
            </ul>

        </nav>
    </head>

    <div class="contenedor">
        <h2 class=" text-blue-500 text-center mt-2 font-sans pt-4 pb-4 text-2xl font-bold">!Heladeria Dulce donde moriras de azucar!</h2>
    </div>

        <div class=" opacity-70 mb-[1px]" id="background">  

        </div>

    @include('layouts.footer')

    
</body>
</html>