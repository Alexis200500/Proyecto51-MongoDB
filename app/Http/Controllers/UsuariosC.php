<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;

class UsuariosC extends Controller
{
  public function altau(){
    return view('usuarios.nuevo');
  }

  public function guardaru(Request $req)
  {
      $usu = new usuarios();
      $usu->nombre =$req->get('nombre');
      $usu->usuario =$req->get('usuario');
      $usu->password =$req->get('password');
      $usu->email =$req->get('email');
      $usu->save();
      return redirect('consultau');
  }

  public function consultau()
  {
    $consulta = usuarios::all();
    return view('usuarios.consultausu',compact('consulta'));
  }

  public function editaru($id)
  {
    $consulta = usuarios::find($id);
    return view('usuarios.modificausu',compact('consulta','id'));
  }

  public function modificau(Request $req, $id)
  {
    $consulta = usuarios::find($id);

    $consulta->nombre =$req->get('nombre');
    $consulta->usuario =$req->get('usuario');
    $consulta->password =$req->get('password');
    $consulta->email =$req->get('email');
    $consulta->save();
    return redirect('consultau')-> with('Ha sido modificado');
  }

  public function eliminaru($id)
  {
    $consulta = usuarios::find($id);
    $consulta->delete();
    return redirect('consultau');
  }

}
