<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController; //es para poder acceder a InicioController, ya que por defecto lo busca en views. Ahora, en el codigo, cada vez que llame a "InicioController", viene a este directorio para saber como acceder a el

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//para mas info de rutas, buscar routing parameters en laravel
Route::get('/', function () {
    return view('welcome');
});
//tenemos get y post
//a windows no le importan mayusculas y minusculas. A linux si.
//Escribir nombres de vistas con minusculas y nombres de clases con mayusuclas
// Route::get('/bienvenida/{nombre?}/{apellido?}', function($nombre='Viajero', $apellido = null){ //funcion anonima
//     //dd($nombre); //se muere y arroja lo que le pasamos por parametros. Es para debuggear
//     return view('paginas-inicio/bienvenida', compact('nombre', 'apellido')); //busca el archivo "bienvenida" dentro de la carpeta view
//     //otra forma de hacerlo es asi... este nos permite hacerle modificaciones al texto, miestras que compact nos permite poner varias variables
//     //return view('paginas-inicio/bienvenida')->with(['nombre' => strtoupper($nombre)]);
//     //la ruta es desde la carpeta view. Podemos usar una diagonal o un punto para movernos entre directorios.
//     //con esto podemos acceder desde la web ->   http://instalacion.test:8080/bienvenida/mariam
//     //las llaves son un parametro que espera a una variable que se llama "nombre". Si no sabemos si se va a recibir un parametro, le ponemos un signo de interrogacion al final. Ademas, le debemos poner en function que valor va a tener por default enc aso de que no lo muestre
// });

// Route::get('/contacto', function(){
//     return view('paginas-inicio/contacto');
// });

//Hacerlo con controladores
Route::get('/bienvenida/{nombre?}/{apellido?}', [InicioController::class, 'bienvenida']); //esta ruta invoca a un controlador y a un metodo en especifico. Esto se hace para evitar que cada ruta ocupe mucho espacio



Route::get('/contacto', [InicioController::class, 'contacto']);
