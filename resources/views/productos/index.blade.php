@extends('layouts.app')
@section('titulo', 'consultar productos') 
@section('contenido')

<style>
    body {
    background-color: #fff;
    font-family: sans-serif;
    color: white;
    
    }

    
    .card {
        background: #48c;
        text-align: center;
        width: 300px;
        margin: auto;
        margin-top: 50px;
        padding: 20px 10px;
        box-shadow: 0px 0px 35px #0006;
        border-radius: 8px;
    }
    
    .card_title {
        font-size: 22px;
        margin: 0;
    }
    
    .card_subtitle {
        font-size: 14px;
        font-weight: 100;
        letter-spacing: 2px;
        margin: 0;
        margin-top: 5px;
    }
    
    .card_content {
        font-size: 9px;
        padding: 10px;
        padding-bottom: 0;
        text-align: justify;
        margin-bottom: 0;
    }
    
</style>



<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">

    @foreach ($productos as $producto)

        <div class="card" class="mr-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
            
            <div class="flex justify-center">
                <!-- Tengo que poner las imagenes automaticas aqui 
                >
                -->
                <!--  <img class="w-[200px] rounded-[25%]" src="https://cdn.pixabay.com/photo/2023/09/23/19/15/ai-generated-8271636_1280.jpg" alt=""> {{ $producto->nombre }}" alt="{{ $producto->nombre }} <img src="https://unsplash.com/es/images/food/ice-cream">-->

                <img class="w-[200px] rounded-[25%]" src="https://cdn.pixabay.com/photo/2023/09/23/19/15/ai-generated-8271636_1280.jpg" alt="">
                
            </div>
            <h1 class="card_title">{{ $producto->nombre }}</h1>
            <h2 class="card_subtitle">{{$producto->precio}}</h2>

                <p class="card_content">
                    {{ Str::limit($producto->descripcion)}}
                </p>

                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                    <div class="btn btn-primary">Stock:{{$producto->stock}}</div>
                </div>
                <div class="card-actions justify-end">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary my-3">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary my-3 btn-">Eliminar</button>
                    </form>
                </div>


                <!-- Nuevos botones -->


            
        </div>
        
    @endforeach
    
</div>



@endsection


