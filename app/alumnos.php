<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class alumnos extends Eloquent
{
            //
            protected $connection = 'mongodb'; //conexion
            protected $collection = 'alumnos';
            protected $fillable = [
                'nombre', 'appaterno', 'apmaterno','sexo','carrera','email',
            ];
}
