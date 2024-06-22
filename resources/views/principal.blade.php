<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heladeria</title>
    

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

    @include('layouts.footer2')

    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    <style>

        * {
            margin: 0; 
            padding: 0;
            box-sizing: border-box; 
            font-family:sans-serif;
            
        }

        body {
            background: #0ea5e9;
            color: #ededed; 
        }

        .header {
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            padding: 28px 10%; 
            background: transparent; 
            display: flex;
            justify-content: space-between;
            align-items: center; 
            z-index: 100; 
        }

        #logo {
            font-size: 25px;
            font-weight: 600; 
        }

        .navbar a {
            font-size: 18px;
            color: #475569;
            text-decoration: none;
            font-weight: 500;
            margin-left: 35px; 
            transition: .3s; 
        }

        .navbar a:hover,
        .navbar a.active {

            color: #1e293b;
        }

        .home {
            height: 100vh; 
            background-size: cover; 
            background-position: center; 
            display: flex; 
            align-items: center; 
            padding: 0 10%;

        }

        .home-content {
            max-width: 600px; 
        }

        .home-content h1 {
            font-size: 56px; 
            font-weight: 700; 
            line-height: 1.2; 
        }

        .home-content p {
            margin: 20px 0 40px; 
            font-size: 16px; 
        }
        
        .home-content .btn-box {
            display: flex; 
            justify-content: space-between; 
            width: 345px; 
            height: 50px; 
        }

        .btn-box a {
            position: relative; 
            display: inline-flex; 
            justify-content: center; 
            align-items: center; 
            width: 150px;
            height: 100%;
            background: #00abf0; 
            border: 2px solid #00abf0; 
            border-radius: 8px; 
            font-size: 19px; 
            color: #081b29; 
            text-decoration: none; 
            font-weight: 600;
            letter-spacing: 1px;  
            z-index: 1;
            overflow: hidden; 
            transition: .5s; 
        }

        .btn-box a {
            background: transparent; 
            color: #00abf0; 
        }

        .btn-box a::before {
            background: #00abf0;
        }

        /*.btn-box a:hover {
            color: #00abf0; 
        }

        
        .btn-box a:nth-child(2):hover {
            color: #081b29;
        }
        

         */

        .btn-box a::before {
            content: '';
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: #081b29; 
            z-index: -1; 
            transition: .5s;
        }

        .btn-box a:hover::before {
            width: 100%;

        }

        .home-imgHover {
            position: absolute;
            top: 0; 
            right: 30px;
            width: 500px; 
            height: 100%; 
            background: transparent; 
            border: 2px solid; 
            }
        
    </style>
</head>
<body>

    <header class="header">
        <a href="#" id="logo" class="w-40 cursor-pointer "><img src="{{asset('assets/img/logo_heladeria.png')}}" alt=""></a>

        <nav class="navbar">
            <a href="#" class="active">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Portafolio</a>
            <a href="#">Contact</a>
        </nav>
    </header>


    <section class="home">
        <div class="home-content">
            <h1>¡¡¡ Bienvenidos a Heladeria Dulce !!!</h1>
            <p>Heladeria Dulce es un negocio familiar que empezo como un sueño que se combirtio en un lugar donde puedes venir y disfrutar de nuestros diferentes sabores de helados en la que cada cucharada es como comerte una nuve</p>
            <div class="btn-box">
                <a href="#">Conoce mas</a>
                <a href="#">Quieres venir</a>
            </div>
        </div>

    </section>
</body>
</html>