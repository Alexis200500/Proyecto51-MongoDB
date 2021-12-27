<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;

class VentasC extends Controller
{
  public function altav(){
    return view('ventas.nuevo');
  }

  public function guardarv(Request $req)
  {
      $ven = new ventas();
      $ven->venta =$req->get('venta');
      $ven->cantidad =$req->get('cantidad');
      $ven->precio =$req->get('precio');
      $ven->caracteristicas =$req->get('caracteristicas');
      $ven->descripcion =$req->get('descripcion');
      $ven->cliente =$req->get('cliente');
      $ven->save();
      return redirect('consultav');
  }

  public function consultav()
  {
    $consulta = ventas::all();
    return view('ventas.consultaven',compact('consulta'));
  }

  public function editarv($id)
  {
    $consulta = ventas::find($id);
    return view('ventas.modificaven',compact('consulta','id'));
  }

  public function modificav(Request $req, $id)
  {
    $consulta = ventas::find($id);

    $consulta->venta =$req->get('venta');
    $consulta->cantidad =$req->get('cantidad');
    $consulta->precio =$req->get('precio');
    $consulta->caracteristicas =$req->get('caracteristicas');
    $consulta->descripcion =$req->get('descripcion');
    $consulta->cliente =$req->get('cliente');
    $consulta->save();
    return redirect('consultav')-> with('Ha sido modificado');
  }


  public function eliminarv($id)
  {
    $consulta = ventas::find($id);
    $consulta->delete();
    return redirect('consultav');
  }

}
