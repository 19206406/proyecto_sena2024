<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*Lo que hay a continuacion es para que la base de datos funcione correctamente*/


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

Route::view('/', 'productos.index');



Route::view('/producto', 'cliente.productos')->name('producto'); 



Route::view('/carrito', 'cliente.carrito')->name('carrito'); 

Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio.inicio');

Route::get('/principal', function(){
    return view('principal');
})->name('principal.principal');


// CRUD 
// Listar productos
/*Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
// Crear productos 
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create
.');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
// Listar producto 
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show'); /*El /productos/{producto}
es un parametro en el cual se mustra el producto con el id tal */

// Editar producto 
/*Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit'); 

Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('producto.update'); 

// Eliminar producto 
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy'); */

Route::resource('productos', ProductoController::class); // Crear 7 rutas para el CRUD 