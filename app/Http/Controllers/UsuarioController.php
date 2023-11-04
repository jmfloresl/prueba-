<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; //importante no olvidar de llamar el modelo que hemos creado 

class UsuarioController extends Controller
{
    //
    
     public function index(){
        $usuarios = Usuario::all();
         
        return view('usuarios', compact('usuarios'));
    }


     public function create(){
        return view('crearUsuario');
    }

    public function store(Request $request){ //este es el esquema para la clase store para poder guardar informacion desde la pagina web 
            return $reques->usuario;
    }
}
