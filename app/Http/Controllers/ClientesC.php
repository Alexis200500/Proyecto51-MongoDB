<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class ClientesC extends Controller
{
  public function altac(){
    return view('clientes.nuevo');
  }

  public function guardarc(Request $req)
  {
      $cl = new clientes();
      $cl->nombre =$req->get('nombre');
      $cl->appaterno =$req->get('appaterno');
      $cl->apmaterno =$req->get('apmaterno');
      $cl->email =$req->get('email');
      $cl->telefono =$req->get('telefono');
      $cl->direccion =$req->get('direccion');
      $cl->save();
      return redirect('consultac');
  }

  public function consultac()
  {
    $consulta = clientes::all();
    return view('clientes.consultacli',compact('consulta'));
  }


  public function editarc($id)
  {
    $consulta = clientes::find($id);
    return view('clientes.modificacli',compact('consulta','id'));
  }

  public function modificac(Request $req, $id)
  {
    $consulta = clientes::find($id);

    $consulta->nombre =$req->get('nombre');
    $consulta->appaterno =$req->get('appaterno');
    $consulta->apmaterno =$req->get('apmaterno');
    $consulta->email =$req->get('email');
    $consulta->telefono =$req->get('telefono');
    $consulta->direccion =$req->get('direccion');
    $consulta->save();
    return redirect('consultac')-> with('Ha sido modificado');
  }

  public function eliminarc($id)
  {
    $consulta = clientes::find($id);
    $consulta->delete();
    return redirect('consultac');
  }
}
