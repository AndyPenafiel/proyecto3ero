<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class OrdenesExport implements FromCollection
{
    protected $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function collection()
    {
        $data = [];

        foreach ($this->datos as $key => $d) {
            $data[] = [
                '#' => 'CO',
                'Cedula del Estudiante' => $d->est_cedula,
                'USD' => 'USD', // Valor fijo 'USD'
                'Valor a Pagar' => $d->valor_pagar,
                'REC' => 'REC', // Valor fijo 'REC'
                'Codigo' => $d->codigo,
                'N' => 'N', // Valor fijo 'N'
                'Secuencial' => $d->secuencial,
            ];
        }

        return new Collection($data);
    }
}

