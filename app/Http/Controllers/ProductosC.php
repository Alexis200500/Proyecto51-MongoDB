<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class ProductosC extends Controller
{
  public function altap(){
    return view('productos.nuevo');
  }

  public function guardarp(Request $req)
  {
      $pr = new productos();
      $pr->producto =$req->get('producto');
      $pr->serie =$req->get('serie');
      $pr->caracteristicas =$req->get('caracteristicas');
      $pr->falla =$req->get('falla');
      $pr->cantidad =$req->get('cantidad');
      $pr->precio =$req->get('precio');
      $pr->save();
      return redirect('consultap');
  }

  public function consultap()
  {
    $consulta = productos::all();
    return view('productos.consultapro',compact('consulta'));
  }

  public function editarp($id)
  {
    $consulta = productos::find($id);
    return view('productos.modificapro',compact('consulta','id'));
  }

  public function modificap(Request $req, $id)
  {
    $consulta = productos::find($id);

    $consulta->producto =$req->get('producto');
    $consulta->serie =$req->get('serie');
    $consulta->caracteristicas =$req->get('caracteristicas');
    $consulta->falla =$req->get('falla');
    $consulta->cantidad =$req->get('cantidad');
    $consulta->precio =$req->get('precio');
    $consulta->save();
    return redirect('consultap')-> with('Ha sido modificado');
  }

  public function eliminarp($id)
  {
    $consulta = productos::find($id);
    $consulta->delete();
    return redirect('consultap');
  }




}
