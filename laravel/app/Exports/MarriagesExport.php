<?php

namespace App\Exports;

use App\Models\Marriage;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MarriagesExport implements 
    FromCollection,
    Responsable,
    WithHeadings
{
    use Exportable;

    public function headings(): array {
        return [
            'id',
            'NumLibro',
            'NumPag',
            'Parroquia',
            'Impedimiento',
            'RutEsposo',
            'NombresEsposo',
            'ApellidoPaternoEsposo',
            'ApellidoMaternoEsposo',
            'EstadoEsposo',
            'PapaNombresEsposo',
            'MamaNombresEsposo',
            'EdadEsposo',
            'ParroquiaBautismoEsposo',
            'NumLibroBautismoEsposo',
            'NumPagBautismoEsposo',
            'RutEsposa',
            'NombresEsposa',
            'ApellidoPaternoEsposa',
            'ApellidoMaternoEsposa',
            'EstadoEsposa',
            'PapaNombresEsposa',
            'MamaNombresEsposa',
            'EdadEsposa',
            'ParroquiaBautismoEsposa',
            'NumLibroBautismoEsposa',
            'NumPagBautismoEsposa',
            'SiendoTestigo',
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

	public function map($marriage): array
	{
		return [
            $marriage->id,
            $marriage->NumLibro,
            $marriage->NumPag,
            $marriage->Parroquia,
            $marriage->Impedimiento,
            $marriage->RutEsposo,
            $marriage->NombresEsposo,
            $marriage->ApellidoPaternoEsposo,
            $marriage->ApellidoMaternoEsposo,
            $marriage->EstadoEsposo,
            $marriage->PapaNombresEsposo,
            $marriage->MamaNombresEsposo,
            $marriage->EdadEsposo,
            $marriage->ParroquiaBautismoEsposo,
            $marriage->NumLibroBautismoEsposo,
            $marriage->NumPagBautismoEsposo,
            $marriage->RutEsposa,
            $marriage->NombresEsposa,
            $marriage->ApellidoPaternoEsposa,
            $marriage->ApellidoMaternoEsposa,
            $marriage->EstadoEsposa,
            $marriage->PapaNombresEsposa,
            $marriage->MamaNombresEsposa,
            $marriage->EdadEsposa,
            $marriage->ParroquiaBautismoEsposa,
            $marriage->NumLibroBautismoEsposa,
            $marriage->NumPagBautismoEsposa,
            $marriage->SiendoTestigo,
            $marriage->Celebrante,
            $marriage->LugCel,
            $marriage->FecCel,
            $marriage->Parroco,
            $marriage->Notas,
            $marriage->DoyFe,
            $marriage->updated_by,
            $marriage->deleted_at,
            $marriage->created_at,
            $marriage->updated_at
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() {
        return Marriage::all();
    }
}
