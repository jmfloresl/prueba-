<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});

//utlizar el metodo get es paara acceder informacion

Route::get('/usuarios', [UsuarioController::class,'index']); //aqui se agrega el controlador siguinedo ese esquema 

Route::get('/usuarios/crear',[UsuarioController::class,'create'])->name('usuario.crear'); // esta ultima parte se especifica el codigo para nombrar en una ruta especifica y asi evitar estar escribieeno el nombre de la ruta completo

// si queremos guardar infromacion de una paginas utlizamos el metodo POST , y vereficar que en el desarollo del html tambien tenga como method= "POST"
Route:: post('/usuarios/guardar',[UsuarioController::class,'store'])->name('usuario.store');