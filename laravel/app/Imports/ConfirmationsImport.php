<?php

namespace App\Imports;

use App\Models\Confirmation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ConfirmationsImport implements 
	ToModel,
	WithHeadingRow,
	SkipsOnError,
	WithValidation,
	SkipsOnFailure,
	WithBatchInserts
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Confirmation([
            'Rut' => $row['Rut'],
            'NumLibro' => $row['NumLibro'],
            'NumPag' => $row['NumPag'],
            'Nombres' => $row['Nombres'],
            'ApellidoPaterno' => $row['ApellidoPaterno'],
            'ApellidoMaterno' => $row['ApellidoMaterno'],
            'PapaNombre' => $row['PapaNombre'],
            'PapaApellido' => $row['PapaApellido'],
            'MamaNombre' => $row['MamaNombre'],
            'MamaApellido' => $row['MamaApellido'],
            'Padrino' => $row['Padrino'],
            'Madrina' => $row['Madrina'],
            'LugBautizo' => $row['LugBautizo'],
            'FecBautizo' => $row['FecBautizo'],
            'NumLibroBautizo' => $row['NumLibroBautizo'],
            'NumPagBautizo' => $row['NumPagBautizo'],
            'Celebrante' => $row['Celebrante'],
            'LugCel' => $row['LugCel'],
            'FecCel' => $row['FecCel'],
            'Parroco' => $row['Parroco'],
            'Notas' => $row['Notas'],
            'DoyFe' => $row['DoyFe'],
            'updated_by' => $row['updated_by'],
			'created_at' => $row['created_at'],
			'updated_at' => $row['updated_at']
        ]);
    }

    public function rules(): array {
        return Confirmation::$rules;
    }

    public function batchSize(): int {
        return 1000;
    }
}