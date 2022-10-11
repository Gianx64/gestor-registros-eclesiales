<?php

namespace Database\Seeders;

use App\Models\Marriage;
use Illuminate\Database\Seeder;

class MarriageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marriage::create([
            'NumLibro'  => '03',
            'NumPag'  => '100',
            'LugCel'  => 'Sede Parroquial de arica',
            'Parroquia' => 'Inmaculada Concepción',
            'FecCel'  => '2007-02-22',
            'Impedimiento'  => 'Ninguno',
            'Celebrante'  => 'P. José Vinés SSP',
            'RutEsposo'  => '20.687.135-5',
            'NombresEsposo' => 'Rodrigo Alonso',
            'ApellidoPaternoEsposo' => 'Sierra',
            'ApellidoMaternoEsposo' => 'Pérez',
            'EstadoEsposo' => 'Soltero',
            'PapaNombresEsposo'  => 'Americo E Muñoz Gutierrez',
            'MamaNombresEsposo'  => 'Yilda Silvana Coppa Kaempffer',
            'EdadEsposo'  => '30',
            'ParroquiaBautismoEsposo'  => 'Inmaculada Concepción',
            'NumLibroBautismoEsposo'  => '22',
            'NumPagBautismoEsposo' => '109',
            'RutEsposa'  => '18.268.100-7',
            'NombresEsposa'  => 'Natalia Alejandra',
            'ApellidoPaternoEsposa'  => 'Fuentes',
            'ApellidoMaternoEsposa'  => 'Jeréz',
            'EstadoEsposa'  => 'Soltera',
            'PapaNombresEsposa'  => 'Fernando Manuel   Montecinos Tudela',
            'MamaNombresEsposa'  => 'Lucila Soto Aguiló',
            'EdadEsposa'  => '29',
            'ParroquiaBautismoEsposa'  => 'Santuario Schoenstatt',
            'NumLibroBautismoEsposa'  => '26',
            'NumPagBautismoEsposa'  => '27',
            'SiendoTestigo'  => 'Toda la Familia',
            'Notas' => 'Se confirmó el 07-12-2002 en P. Sta Cruz de Mayo por Mons. Ricardo Ezzoli',
            'Parroco'  => 'Pbro. Francisco Javier Manterola C.',
            'DoyFe'  => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);
        
        Marriage::create([
            'NumLibro'  => '25',
            'NumPag'  => '245',
            'LugCel'  => 'Sede Parroquial',
            'Parroquia' => 'B. O´Higgins 50',
            'FecCel'  => '2000-07-07',
            'Impedimiento'  => 'Ninguno',
            'Celebrante'  => 'Diácono  Florentino  Benites  Oyarzún',
            'RutEsposo'  => '12.357.159-7',
            'NombresEsposo' => 'Ivan Alejandro',
            'ApellidoPaternoEsposo' => 'Cisterna',
            'ApellidoMaternoEsposo' => 'Espinoza',
            'EstadoEsposo' => 'Soltero',
            'PapaNombresEsposo'  => 'Juan Guillermo Díaz Carrasco',
            'MamaNombresEsposo'  => 'Maria Teresa Ferrufino Díaz',
            'EdadEsposo'  => '57',
            'ParroquiaBautismoEsposo'  => 'B. O´Higgins 50',
            'NumLibroBautismoEsposo'  => '20',
            'NumPagBautismoEsposo' => '157',
            'RutEsposa'  => '15.653.477-2',
            'NombresEsposa'  => 'Constanza Belén',
            'ApellidoPaternoEsposa'  => 'Martínez',
            'ApellidoMaternoEsposa'  => 'Díaz',
            'EstadoEsposa'  => 'Soltera',
            'PapaNombresEsposa'  => 'Pablo Cano Rodriguez',
            'MamaNombresEsposa'  => 'Yessica Jaime Flores',
            'EdadEsposa'  => '60',
            'ParroquiaBautismoEsposa'  => 'Lindaura Rodriguez',
            'NumLibroBautismoEsposa'  => '258',
            'NumPagBautismoEsposa'  => '1',
            'SiendoTestigo'  => 'Nolvia Alvarez Fernández, Bernardo Maturana, Gustavo Henríquez Guevara y Francisco Rubio Collao',
            'Notas' => '',
            'Parroco'  => 'Pbro. Francisco Javier Manterola C.',
            'DoyFe'  => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);
        
        Marriage::create([
            'NumLibro'  => '30',
            'NumPag'  => '300',
            'LugCel'  => 'Providencia',
            'Parroquia' => 'B. O´Higgins 50',
            'FecCel'  => '2006-01-01',
            'Impedimiento'  => 'ninguno',
            'Celebrante'  => 'Diác. Florentina Benites Oyarzún',
            'RutEsposo'  => '19.358.123.7',
            'NombresEsposo' => 'Sebastián Andrés',
            'ApellidoPaternoEsposo' => 'Soto',
            'ApellidoMaternoEsposo' => 'Cabrera',
            'EstadoEsposo' => 'Soltero',
            'PapaNombresEsposo'  => 'Francisco Elias Mardones  Márquez',
            'MamaNombresEsposo'  => 'Irene Arriagada Lopez',
            'EdadEsposo'  => '25',
            'ParroquiaBautismoEsposo'  => 'Parroquiía San Vicente de Paúl',
            'NumLibroBautismoEsposo'  => '10',
            'NumPagBautismoEsposo' => '09',
            'RutEsposa'  => '12.357.951-6',
            'NombresEsposa'  => 'Mónica Iris',
            'ApellidoPaternoEsposa'  => 'Herrera',
            'ApellidoMaternoEsposa'  => 'Ibarra',
            'EstadoEsposa'  => 'Soltera',
            'PapaNombresEsposa'  => 'Miguel Guillermo Rojas',
            'MamaNombresEsposa'  => 'Carolina  Bustamante  Vargas',
            'EdadEsposa'  => '19',
            'ParroquiaBautismoEsposa'  => 'Todos Los Santos',
            'NumLibroBautismoEsposa'  => '02',
            'NumPagBautismoEsposa'  => '12',
            'SiendoTestigo'  => 'María Madre del Verbo de Dios, Claudia  Virginia Pailamilla  Verdugo y Abraham Romero H',
            'Notas' => 'Sin Notas Al Margen',
            'Parroco'  => 'Pbro. Francisco Javier Manterola C.',
            'DoyFe'  => 'Pbro. Francisco Javier Manterola C.',
            'updated_by' => ''
        ]);
    }
}
