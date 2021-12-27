<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;

class alumnosC extends Controller
{
    public function ver(){
        return view('vista_alumnos');
    }

    public function guardar(Request $req){
        $car = new alumnos();
        $car->nombre = $req->get('nombre');
        $car->appaterno = $req->get('appaterno');
        $car->apmaterno = $req->get('apmaterno');
        $car->sexo = $req->get('sexo');
        $car->carrera = $req->get('carrera');
        $car->email = $req->get('email');
        $car->save();
        echo "Ha sido guardado con exito";
      }
}
