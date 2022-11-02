<?php

namespace Database\Seeders;

use App\Models\Baptism;
use Illuminate\Database\Seeder;

class BaptismSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Baptism::create([
            'Rut' => '20.592.507-4',
            'NumLibro' => '11',
            'NumPag' => '117',
            'Nombres' => 'Camila Ignacia',
            'ApellidoPaterno' => 'Tapia',
            'ApellidoMaterno' => 'Echevarria',
            'LugNac' => 'San Bernardo',
            'FecNac' => '2004-11-16',
            'PapaNombre' => 'Francisco Rodrigo',
            'PapaApellido' => 'Tapia Villanueva',
            'MamaNombre' => 'Javiera Carolina',
            'MamaApellido' => 'Avello Palma',
            'Padrino' => 'Héctor Iván Díaz Sanovia',
            'Madrina' => 'Ivette  Molina',
            'LugCel' => 'Sede Parroquial',
            'FecCel' => '1991-11-29',
            'Ministro' => 'P. Diácono Raul Gutiérrez',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'Notas' => 'Sin Notas Al Margen',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Baptism::create([
            'Rut' => '19.184.350-9',
            'NumLibro' => '11',
            'NumPag' => '121',
            'Nombres' => 'Diego Andrés',
            'ApellidoPaterno' => 'Durán',
            'ApellidoMaterno' => 'Aguilar',
            'LugNac' => 'Santiago',
            'FecNac' => '2006-01-01',
            'PapaNombre' => 'Roberto Carlos',
            'PapaApellido' => 'Durán Fuentes',
            'MamaNombre' => 'Lorena Rubio',
            'MamaApellido' => 'Iribarra Molina',
            'Padrino' => 'Luis Osvaldo Abarca Piña',
            'Madrina' => 'Dainy Schultz Novellino',
            'LugCel' => 'Sede Parroquial',
            'FecCel' => '2007-05-19',
            'Ministro' => 'Pbro. Francisco Javier Manterola C',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'Notas' => 'Según documento adjunto los apellidos son Wojciech Rydel',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Baptism::create([
            'Rut' => '18.478.971-K',
            'NumLibro' => '14',
            'NumPag' => '403',
            'Nombres' => 'Fabiola Andrea',
            'ApellidoPaterno' => 'Galdamez',
            'ApellidoMaterno' => 'Bravo',
            'LugNac' => 'Ñuñoa',
            'FecNac' => '2015-07-20',
            'PapaNombre' => 'Cristian Rodrigo',
            'PapaApellido' => 'Vera Chamorro',
            'MamaNombre' => 'Cisterna Diaz',
            'MamaApellido' => 'Lucero Moreno',
            'Padrino' => 'Velko Antonio Zuvic Aravena',
            'Madrina' => 'Barbara  Guadalupe Figueroa Herrada',
            'LugCel' => 'Santuario Schoenstatt',
            'FecCel' => '2020-12-07',
            'Ministro' => 'P. Enrique Sieben',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'Notas' => '',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);

        Baptism::create([
            'Rut' => '19.839.209-K',
            'NumLibro' => '17',
            'NumPag' => '445',
            'Nombres' => 'Nicolás Antonio',
            'ApellidoPaterno' => 'Rojas',
            'ApellidoMaterno' => 'Díaz',
            'LugNac' => 'Santiago',
            'FecNac' => '1990-10-11',
            'PapaNombre' => 'Pedro M',
            'PapaApellido' => 'Cárdenas Irrizarra',
            'MamaNombre' => 'Jacqueline',
            'MamaApellido' => 'Oyarzún Panes',
            'Padrino' => 'Victor Pinto Astorga',
            'Madrina' => 'Miriam D Carrasco Maldonado',
            'LugCel' => 'San Alberto Hurtado',
            'FecCel' => '2000-06-06',
            'Ministro' => 'Diác. Luis Castro Vásquez',
            'Parroco' => 'Pbro. Francisco Javier Manterola C.',
            'Notas' => '',
            'DoyFe' => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);
    }
}
