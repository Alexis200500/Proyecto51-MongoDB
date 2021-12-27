<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class productos extends Eloquent
{
  protected $connection = 'mongodb'; //conexion
  protected $collection = 'productos';
      protected $fillable = ['producto','serie','caracteristicas','falla','cantidad','precio'];
}
