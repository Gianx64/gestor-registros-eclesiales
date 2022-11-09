<?php

namespace App\Exports;

use App\Models\Confirmation;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ConfirmationsExport implements 
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
            'PapaNombre',
            'PapaApellido',
            'MamaNombre',
            'MamaApellido',
            'Padrino',
            'Madrina',
            'LugBautizo',
            'FecBautizo',
            'NumLibroBautizo',
            'NumPagBautizo',
            'Celebrante',
            'LugCel',
            'FecCel',
            'Parroco',
            'Notas',
            'DoyFe',
            'updated_by',
			'deleted_at',
			'created_at',
			'updated_at'
        ];
    }

	public function map($confirmation): array
	{
		return [
            $confirmation->id,
            $confirmation->Rut,
            $confirmation->NumLibro,
            $confirmation->NumPag,
            $confirmation->Nombres,
            $confirmation->ApellidoPaterno,
            $confirmation->ApellidoMaterno,
            $confirmation->PapaNombre,
            $confirmation->PapaApellido,
            $confirmation->MamaNombre,
            $confirmation->MamaApellido,
            $confirmation->Padrino,
            $confirmation->Madrina,
            $confirmation->LugBautizo,
            $confirmation->FecBautizo,
            $confirmation->NumLibroBautizo,
            $confirmation->NumPagBautizo,
            $confirmation->Celebrante,
            $confirmation->LugCel,
            $confirmation->FecCel,
            $confirmation->Parroco,
            $confirmation->Notas,
            $confirmation->DoyFe,
            $confirmation->updated_by,
            $confirmation->deleted_at,
            $confirmation->created_at,
            $confirmation->updated_at
		];
	}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() {
        return Confirmation::all();
    }
}
