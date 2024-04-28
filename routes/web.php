<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $productos = [

        ['nombre' => 'Helado de cafe', 'precio' => 15000, 'des' => 'Nuestro helado de vainilla es una deliciosa combinación de cremosidad y sabor suave. Elaborado con vainilla de alta calidad, cada bocado te transporta a un mundo de dulzura y satisfacción. Su textura suave y sedosa se funde en tu boca, dejando un regusto dulce y reconfortante'],
        ['nombre' => 'Helado de vainilla', 'precio' => 13000, 'des' => 'Nuestro helado de vainilla es una deliciosa combinación de cremosidad y sabor suave. Elaborado con vainilla de alta calidad, cada bocado te transporta a un mundo de dulzura y satisfacción. Su textura suave y sedosa se funde en tu boca, dejando un regusto dulce y reconfortante'],
        ['nombre' => 'Helado de frito', 'precio' => 18000, 'des' => 'Sumérgete en una experiencia única con nuestro helado suave y cremoso, envuelto en una crujiente capa dorada y caliente. Cada bocado es una explosión de sabor y textura que deleitará tus sentidos'],
        ['nombre' => 'Helado de yogurt', 'precio' => 18000, 'des' => 'una opción deliciosa y saludable para cualquier momento del día! Desde los clásicos naturales hasta los indulgentes con sabores frutales y exóticos'],
        ['nombre' => 'Helado de ron con pasas', 'precio' => 20000, 'des' => 'Cada suave cucharada es una explosión de sabor, con la dulzura del ron perfectamente equilibrada con el toque jugoso de las pasas. Este delicioso helado es un capricho para los amantes del dulce y del licor']
    ];


    //$descripcion = [
    //        'nombre' => 'Nuestro helado de vainilla es una deliciosa combinación de cremosidad y sabor suave. Elaborado con vainilla de alta calidad, cada bocado te transporta a un mundo de dulzura y satisfacción. Su textura suave y sedosa se funde en tu boca, dejando un regusto dulce y reconfortante',
    //        'nombre' => 'Nuestro helado de vainilla es una deliciosa combinación de cremosidad y sabor suave. Elaborado con vainilla de alta calidad, cada bocado te transporta a un mundo de dulzura y satisfacción. Su textura suave y sedosa se funde en tu boca, dejando un regusto dulce y reconfortante',
    //        'nombre' => 'Sumérgete en una experiencia única con nuestro helado suave y cremoso, envuelto en una crujiente capa dorada y caliente. Cada bocado es una explosión de sabor y textura que deleitará tus sentidos',
    //        'nombre' => 'una opción deliciosa y saludable para cualquier momento del día! Desde los clásicos naturales hasta los indulgentes con sabores frutales y exóticos',
    //        'nombre' => 'Cada suave cucharada es una explosión de sabor, con la dulzura del ron perfectamente equilibrada con el toque jugoso de las pasas. Este delicioso helado es un capricho para los amantes del dulce y del licor'
    //];

    

    $nombre = "Heladaria dulce";

    return view('welcome', ['productos' => $productos], ['nombre' => $nombre]);

});



Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio.inicio');

Route::get('/principal', function(){
    return view('principal');
})->name('principal.principal');





