<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ventas extends Eloquent
{
  protected $connection = 'mongodb'; //conexion
  protected $collection = 'ventas';
  protected $fillable = ['venta','cantidad','precio','caracteristicas','descripcion','cliente'];
}
