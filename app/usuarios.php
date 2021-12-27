<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class usuarios extends Eloquent
{
  protected $connection = 'mongodb'; //conexion
  protected $collection = 'usuarios';
   protected $fillable = ['nombre', 'usuario', 'email', 'password'];
}
