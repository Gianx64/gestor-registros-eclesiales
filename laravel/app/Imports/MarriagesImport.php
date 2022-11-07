<?php

namespace App\Imports;

use App\Models\Marriage;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class MarriagesImport implements 
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
        return new Marriage([
            'NumLibro' => $row['NumLibro'],
            'NumPag' => $row['NumPag'],
            'Parroquia' => $row['Parroquia'],
            'Impedimiento' => $row['Impedimiento'],
            'RutEsposo' => $row['RutEsposo'],
            'NombresEsposo' => $row['NombresEsposo'],
            'ApellidoPaternoEsposo' => $row['ApellidoPaternoEsposo'],
            'ApellidoMaternoEsposo' => $row['ApellidoMaternoEsposo'],
            'EstadoEsposo' => $row['EstadoEsposo'],
            'PapaNombresEsposo' => $row['PapaNombresEsposo'],
            'MamaNombresEsposo' => $row['MamaNombresEsposo'],
            'EdadEsposo' => $row['EdadEsposo'],
            'ParroquiaBautismoEsposo' => $row['ParroquiaBautismoEsposo'],
            'NumLibroBautismoEsposo' => $row['NumLibroBautismoEsposo'],
            'NumPagBautismoEsposo' => $row['NumPagBautismoEsposo'],
            'RutEsposa' => $row['RutEsposa'],
            'NombresEsposa' => $row['NombresEsposa'],
            'ApellidoPaternoEsposa' => $row['ApellidoPaternoEsposa'],
            'ApellidoMaternoEsposa' => $row['ApellidoMaternoEsposa'],
            'EstadoEsposa' => $row['EstadoEsposa'],
            'PapaNombresEsposa' => $row['PapaNombresEsposa'],
            'MamaNombresEsposa' => $row['MamaNombresEsposa'],
            'EdadEsposa' => $row['EdadEsposa'],
            'ParroquiaBautismoEsposa' => $row['ParroquiaBautismoEsposa'],
            'NumLibroBautismoEsposa' => $row['NumLibroBautismoEsposa'],
            'NumPagBautismoEsposa' => $row['NumPagBautismoEsposa'],
            'SiendoTestigo' => $row['SiendoTestigo'],
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
        return Marriage::$rules;
    }

    public function batchSize(): int {
        return 1000;
    }
}
