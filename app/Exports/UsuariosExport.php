<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use\App\Usuarios;

class UsuariosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   public function collection()
    {
        return Usuarios::all();
    }

    public function headings(): array{
    	return[
    		'Id Usuario',
    		'Nombre Usuario',
    		'Usuario',
    		'Email',
    		'Password',
    		'Created_at',
    		'Updated_at',
    	];
    }
}
