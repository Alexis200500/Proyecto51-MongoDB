<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class clientes extends Eloquent
{
              protected $connection = 'mongodb'; //conexion
              protected $collection = 'clientes';
              protected $fillable = ['nombre','appaterno','apmaterno','email','telefono','direccion'];
}
