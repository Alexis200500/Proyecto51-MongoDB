<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class empleados extends Eloquent
{
  protected $connection = 'mongodb'; //conexion
  protected $collection = 'empleados';
   protected $fillable = ['nombre','appat','apmat','telefono','direccion'];
}
