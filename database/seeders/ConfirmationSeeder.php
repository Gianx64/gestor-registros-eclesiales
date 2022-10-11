<?php

namespace Database\Seeders;

use App\Models\Confirmation;
use Illuminate\Database\Seeder;

class ConfirmationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Confirmation::create([
            'NumLibro' => '11',
            'NumPag' => '117',
            'LugCel' => 'Santiago',
            'Celebrante' => 'P. Diácono Raul Gutiérrez',
            'Rut' => '16.987.648-5',
            'FecCel' => '1991-11-29',
            'Nombres' => 'Nicole Belén',
            'ApellidoPaterno' => 'Reyes',
            'ApellidoMaterno' => 'Elgueta',
            'PapaNombre' => 'Cristian Ramón Riquelme Zuñiga',
            'MamaNombre' => 'Clara Angélica Muñoz Correa',
            'Padrino' => 'Alvaro  Pantoja Busch',
            'Madrina' => 'Elizabeth Alejandra Parra Henriquez',
            'LugarBautizo' => 'Sede Parroquial',
            'FecBautizo' => '2004-11-16',
            'NumLibroBautizo' => '11',
            'NumPagBautizo' => '117',
            'Notas' => '',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Confirmation::create([
            'NumLibro' => '12',
            'NumPag' => '119',
            'LugCel' => 'Recoleta',
            'Celebrante' => 'P. Diácono Raul Gutiérrez',
            'Rut' => '4.987.231-k',
            'FecCel' => '2000-05-18',
            'Nombres' => 'Sofia Belen',
            'ApellidoPaterno' => 'Ortíz',
            'ApellidoMaterno' => 'Barraza',
            'PapaNombre' => 'Francisco Rodrigo',
            'MamaNombre' => 'Leticia López Quintana',
            'Padrino' => 'Héctor Iván Díaz Sanovia',
            'Madrina' => 'Angélica Henríquez Antoive',
            'LugarBautizo' => 'Hermanas de Betania',
            'FecBautizo' => '2010-08-11',
            'NumLibroBautizo' => '09',
            'NumPagBautizo' => '127',
            'Notas' => 'Sin Notas Al Margen',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Confirmation::create([
            'NumLibro' => '01',
            'NumPag' => '10',
            'LugCel' => 'Santiago',
            'Celebrante' => 'P. Diácono Raul Gutiérrez',
            'Rut' => '19.976.127-8',
            'FecCel' => '2000-01-09',
            'Nombres' => 'Maria Francisca',
            'ApellidoPaterno' => 'Valenzuela',
            'ApellidoMaterno' => 'Hernández',
            'PapaNombre' => 'Carlos Eugenio Fernández Cabalin',
            'MamaNombre' => 'Maria  Eugenia  Jaramillo  Oyarzún',
            'Padrino' => 'Felipe Fernández Aguirre',
            'Madrina' => 'Gabriela del Carmen Salazar Montero',
            'LugarBautizo' => 'Sede Parroquial',
            'FecBautizo' => '1981-07-07',
            'NumLibroBautizo' => '31',
            'NumPagBautizo' => '200',
            'Notas' => '',
            'Parroco' => 'Diácono Luis Castro',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Confirmation::create([
            'NumLibro' => '10',
            'NumPag' => '110',
            'LugCel' => 'Santiago',
            'Celebrante' => 'P. Diácono Raul Gutiérrez',
            'Rut' => '17.631.100-1',
            'FecCel' => '2020-02-28',
            'Nombres' => 'Carlos Andres',
            'ApellidoPaterno' => 'Salinas',
            'ApellidoMaterno' => 'Garrido',
            'PapaNombre' => 'Juan Guillermo Díaz Carrasco',
            'MamaNombre' => 'Maria Fuentes',
            'Padrino' => 'Juan Ricotti Pardo',
            'Madrina' => 'Jocelyn Fuentes',
            'LugarBautizo' => 'Sede Parroquial',
            'FecBautizo' => '2007-09-22',
            'NumLibroBautizo' => '11',
            'NumPagBautizo' => '120',
            'Notas' => 'Sin Notas Al Margen',
            'Parroco' => 'P. Helmut Rieger',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);
    }
}
