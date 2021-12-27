<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use\App\Productos;

class ProductosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   public function collection()
    {
        return Productos::all();
    }

    public function headings(): array{
    	return[
    		'Id Productos',
    		'Productos',
    		'Serie',
    		'Caracteristicas',
    		'Falla',
    		'Cantidad',
    		'Precio',
    		'Created_at',
    		'Updated_at',
    	];
    }
}

