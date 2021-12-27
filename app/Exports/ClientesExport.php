<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use\App\Clientes;

class ClientesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   public function collection()
    {
        return Clientes::all();
    }

    public function headings(): array{
    	return[
    		'Id Cliente',
    		'Nombre Cliente',
    		'Ap. Paterno',
    		'Ap. Materno',
    		'Email',
    		'Teléfono',
    		'Direccion',
    		'Created_at',
    		'Updated_at',
    	];
    }
}
