<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use\App\Ventas;

class VentasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   public function collection()
    {
        return Ventas::all();
    }

    public function headings(): array{
    	return[
    		'Id Venta',
    		'Venta',
    		'Cantidad',
    		'Precio',
    		'Caracteristicas',
    		'Descripcion',
    		'Cliente',
    		'Created_at',
    		'Updated_at',
    	];
    }
}
