<?php

namespace App\Exports;

use App\Models\Baptism;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BaptismsExport implements
	FromCollection,
    Responsable,
	WithHeadings
{
	use Exportable;
	
	public function headings (): array {
		return [
			'id',
			'Rut',
			'NumLibro',
			'NumPag',
			'Nombres',
			'ApellidoPaterno',
			'ApellidoMaterno',
			'LugNac',
			'FecNac',
			'PapaNombre',
			'PapaApellido',
			'MamaNombre',
			'MamaApellido',
			'Padrino',
			'Madrina',
			'LugCel',
			'FecCel',
			'Ministro',
			'Parroco',
			'Notas',
			'DoyFe',
			'updated_by',
			'deleted_at',
			'created_at',
			'updated_at'
		];
	}

	public function map($baptism): array
	{
		return [
			$baptism->id,
			$baptism->Rut,
			$baptism->NumLibro,
			$baptism->NumPag,
			$baptism->Nombres,
			$baptism->ApellidoPaterno,
			$baptism->ApellidoMaterno,
			$baptism->LugNac,
			$baptism->FecNac,
			$baptism->PapaNombre,
			$baptism->PapaApellido,
			$baptism->MamaNombre,
			$baptism->MamaApellido,
			$baptism->Padrino,
			$baptism->Madrina,
			$baptism->LugCel,
			$baptism->FecCel,
			$baptism->Ministro,
			$baptism->Parroco,
			$baptism->Notas,
			$baptism->DoyFe,
			$baptism->updated_by,
			$baptism->deleted_at,
			$baptism->created_at,
			$baptism->updated_at
		];
	}

    /**
    * @return \Illuminate\Support\Collection
    */
	public function collection() {
		return Baptism::all();
	}
}
