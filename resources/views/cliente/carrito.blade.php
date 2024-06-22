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
                <ul>
                    <li>
                        <a class="boton-menu boton-volver" href="{{route('producto')}}"><i class="bi bi-arrow-return-left"></i> Seguir comprando </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="{{route('carrito')}}"><i class="bi bi-cart-fill"></i>Carrrito</a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">Helado Dulce</p>
            </footer>
        </aside>
        <main>

            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
               <p class="carrito-vacio">Tu carrito esta vacio <i class="bi bi-emoji-frown"></i></p>
               <div class="carrito-productos">
                    <div class="carrito-producto disabled">
                        <img class="w-[200px] rounded-[25%] carrito-producto-imagen" src="https://cdn.pixabay.com/photo/2023/09/23/19/15/ai-generated-8271636_1280.jpg" alt="">
                        <div class="carrito-producto-titulo">
                            <small>Titulo</small>
                            <h3> $producto->nombre </h3>
                        </div>
                        <div class="carrito-producto-cantidad">
                            <small>Cantidad</small>
                            <p>1</p>
                        </div>
                        <div class="carrito-producto-precio">
                            <small>Precio</small>
                            <p>producto->precio</p>
                        </div>
                        <div class="carrito-producto-subtotal">
                            <small>Subtotal</small>
                            <p>producto->precio</p>
                        </div>
                        <button class="carrito-producto-eliminar"><i class="bi bi-trash-fill"></i></button>
                    </div>
               </div>
               <div class="carrito-acciones disabled">
                    <div class="carrito-acciones-izquierda">
                        <button class="carrito-acciones-vaciar">Vaciar carrito</button>
                    </div>
                    <div class="carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>Total</p>
                            <p id="total">producto->precio</p>
                        </div>
                        <button class="carrito-acciones-comprar">Comprar Ahora</button>
                    </div>
               </div>
               <p class="carrito-comprado disabled">Muchas gracias por tu compra</p>
            </div>



        </main>
    </div>
    
</body>
</html>