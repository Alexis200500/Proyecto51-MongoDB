<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;

class EmpleadosC extends Controller
{
  public function altae(){
    return view('empleados.nuevo');
  }

  public function guardare(Request $req)
  {
      $em = new empleados();
      $em->nombre =$req->get('nombre');
      $em->appat =$req->get('appat');
      $em->apmat =$req->get('apmat');
      $em->telefono =$req->get('telefono');
      $em->direccion =$req->get('direccion');
      $em->save();
      return redirect('consultae');
  }

  public function consultae()
  {
    $consulta = empleados::all();
    return view('empleados.consultaemp',compact('consulta'));
  }

  public function editare($id)
  {
    $consulta = empleados::find($id);
    return view('empleados.modificaemp',compact('consulta','id'));
  }

  public function modificae(Request $req, $id)
  {
    $consulta = empleados::find($id);

    $consulta->nombre =$req->get('nombre');
    $consulta->nombre =$req->get('nombre');
    $consulta->appat =$req->get('appat');
    $consulta->apmat =$req->get('apmat');
    $consulta->telefono =$req->get('telefono');
    $consulta->direccion =$req->get('direccion');
    $consulta->save();
    return redirect('consultae')-> with('Ha sido modificado');
  }
  public function eliminare($id)
  {
    $consulta = empleados::find($id);
    $consulta->delete();
    return redirect('consultae');
  }

}
