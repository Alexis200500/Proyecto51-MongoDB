<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use\App\Empleados;

class EmpleadosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   public function collection()
    {
        return Empleados::all();
    }

    public function headings(): array{
    	return[
    		'Id Empleado',
    		'Nombre Empleado',
    		'Ap. Paterno',
    		'Ap. Materno',
    		'Telefono',
    		'Direccion',
    		'Updated_at',
    		'Created_at',
    	];
    }
}
