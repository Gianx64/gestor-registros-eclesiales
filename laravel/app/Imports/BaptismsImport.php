<?php

namespace App\Imports;

use App\Models\Baptism;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class BaptismsImport implements 
	SkipsOnError,
	SkipsOnFailure,
	ToModel,
	WithBatchInserts,
	WithHeadingRow,
	WithValidation
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Baptism([
            'Rut' => $row['Rut'],
            'NumLibro' => $row['NumLibro'],
            'NumPag' => $row['NumPag'],
            'Nombres' => $row['Nombres'],
            'ApellidoPaterno' => $row['ApellidoPaterno'],
            'ApellidoMaterno' => $row['ApellidoMaterno'],
			'LugNac' => $row['LugNac'],
			'FecNac' => $row['FecNac'],
            'PapaNombre' => $row['PapaNombre'],
            'PapaApellido' => $row['PapaApellido'],
            'MamaNombre' => $row['MamaNombre'],
            'MamaApellido' => $row['MamaApellido'],
            'Padrino' => $row['Padrino'],
            'Madrina' => $row['Madrina'],
            'LugCel' => $row['LugCel'],
            'FecCel' => $row['FecCel'],
			'Ministro' => $row['Ministro'],
            'Parroco' => $row['Parroco'],
            'Notas' => $row['Notas'],
            'DoyFe' => $row['DoyFe'],
            'updated_by' => $row['updated_by'],
			'deleted_at' => $row['deleted_at'],
			'created_at' => $row['created_at'],
			'updated_at' => $row['updated_at']
        ]);
    }

    public function rules(): array {
        return Baptism::$rules;
    }

    public function batchSize(): int {
        return 1000;
    }
}
