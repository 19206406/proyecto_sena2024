<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/productos.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo">Heladeria Dulce</h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button class="boton-menu boton-categoria active"><i class="bi bi-hand-index-fill"></i>Todos los productos</button>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="{{route('carrito')}}"><i class="bi bi-cart-fill"></i>Carrrito <span class="numerito">1</span></a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="{{route('home')}}">Wellcome
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">Helado Dulce</p>
            </footer>
        </aside>
        <main>

            <h2 class="titulo-principal">Productos</h2>
            <div id="contenedor-productos" class="contenedor-productos">
            <!--Aqui se rellenan con la función listar con php y laravel-->
            @foreach($productos as $producto)
                <div class="producto">
                    <img class="w-[200px] rounded-[25%] producto-imagen" src="https://cdn.pixabay.com/photo/2023/09/23/19/15/ai-generated-8271636_1280.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">{{ $producto->nombre }}</h3>
                        <h3 class="producto-titulo">{{ $producto->precio }}</h3>
                        <p class="producto-descripcion">({{ Str::limit($producto->descripcion) }})</p>
                        <button id="{{ $producto->id }}" class="producto-agregar">Agregar</button>
                    </div>
                </div>
            @endforeach
            </div>



        </main>
    </div>
    

    <script src="{{asset('js/productos.js')}}"></script>
</body>
</html>