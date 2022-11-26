<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create([
            'Nombre' => 'matrimonio',
            'Codigo' => '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de Matrimonio</title>
    <style>
        img {
            max-width: 20%;
            height: auto;	
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img
                src="../../storage/app/public/utem.png" 
                alt="Logo de la Parroquia"
            >
            <h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Matrimonio</h1>
            <hr>
        </div>
    </header>
    <section>
        <table width="100%">
            <tr>
                <th><h3>Esposo</h3></th>
                <th><h3>Esposa</h3></th>
            </tr>
            <tr>
                <td>Nombres: #NombresEsposo</td>
                <td>Nombre: #NombresEsposa</td>
            </tr>
            <tr>
                <td>Apellido paterno: #ApellidoPaternoEsposo</td>
                <td>Apellido paterno: #ApellidoPaternoEsposa</td>
            </tr>
            <tr>
                <td>Apellido materno: #ApellidoMaternoEsposo</td>
                <td>Apellido materno: #ApellidoMaternoEsposa</td>
            </tr>
            <tr>
                <td>Rut: #RutEsposo</td>
                <td>Rut: #RutEsposa</td>
            </tr>
            <tr>
                <td>Estado: #EstadoEsposo</td>
                <td>Estado: #EstadoEsposa</td>
            </tr>
            <tr>
                <td>Edad: #EdadEsposo</td>
                <td>Edad: #EdadEsposa</td>
            </tr>
            <tr>
                <td>Padre: #PapaNombresEsposo</td>
                <td>Padre: #PapaNombresEsposa</td>
            </tr>
            <tr>
                <td>Madre: #MamaNombresEsposo</td>
                <td>Madre: #MamaNombresEsposa</td>
            </tr>
            <tr>
                <td>Parroquia del bautizo: #ParroquiaBautismoEsposo</td>
                <td>Parroquia del bautizo: #ParroquiaBautismoEsposa</td>
            </tr>
            <tr>
                <td>Número de libro de bautizo: #NumLibroBautismoEsposo</td>
                <td>Número de libro de bautizo: #NumLibroBautismoEsposa</td>
            </tr>
            <tr>
                <td>Número de página de bautizo: #NumPagBautismoEsposo</td>
                <td>Número de página de bautizo: #NumPagBautismoEsposa</td>
            </tr>
        </table>
        <h3>Matrimonio</h3>
        <ul>					
            <li>Número de libro: #NumLibro</li>
            <li>Número de página: #NumPag</li>
            <li>Lugar de celebración: #LugardeCelebracion</li>
            <li>Parroquia: #Parroquia</li>
            <li>Fecha de Celebración: #FechadeCelebracion</li>
            <li>Impedimento: #Impedimento</li>
            <li>Ministro: #Ministro</li>
            <li>Siendo testigo: #SiendoTestigo</li>
            <li>Notas: #Notas</li>
            <li>Parroco: #Parroco</li>
            <li>Doy fe: #DoyFe</li>
        </ul>
    </section>
    <footer>
        <img 
            src="../../storage/app/public/sello.png" 
            alt="Firma y/o Sello"
        >
    </footer>
</body>
</html>',
        'Tags' => '#LugardeCelebracion, #FechadeCelebracion, #Impedimento, #Ministro, #NombresEsposo, #ApellidoPaternoEsposo, #ApellidoMaternoEsposo, #RutEsposo, #EstadoEsposo, #EdadEsposo, #PapaNombresEsposo, #MamaNombresEsposo, #ParroquiaBautismoEsposo, #NumLibroBautismoEsposo, #NumPagBautismoEsposo, #NombresEsposa, #ApellidoPaternoEsposa, #ApellidoMaternoEsposa, #RutEsposa, #EstadoEsposa, #EdadEsposa, #PapaNombresEsposa, #MamaNombresEsposa, #ParroquiaBautismoEsposa, #NumLibroBautismoEsposa, #NumPagBautismoEsposa, #SiendoTestigo, #Notas, #Parroco, #DoyFe, #Parroquia, #NumLibro, #NumPag,',
        'updated_by' => ''
        ]);
        
        Certificate::create([
            'Nombre' => 'confirmacion',
            'Codigo' => '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de Confirmación</title>
    <style>
        img {
            max-width: 20%;
            height: auto;	
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img
                src="../../storage/app/public/utem.png" 
                alt="Logo de la Parroquia"
            >
            <h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Confirmación</h1>
            <hr>
        </div>
    </header>
    <section>
        <ul>
            <li>Número libro: #NumerodeLibro</li>
            <li>Número de página: #NumerodePagina</li>
            <li>Lugar de celebración: #LugardeCelebracion</li>
            <li>Celebrante: #Celebrante</li>
            <li>Fecha de celenbración: #FechadeCelebracion</li>
            <li>Nombres: #Nombres</li>
            <li>Apellido paterno: #ApellidoPaterno</li>
            <li>Apellido materno: #ApellidoMaterno</li>
            <li>Rut: #RutConfirmado</p></li>
            <li>Padre del confirmado: #PapaNombre #PapaApellido</li>
            <li>Madre del confirmado: #MamaNombre #MamaApellido</li>
            <li>Lugar de bautizo: #LugardeBautizo</li>
            <li>Fecha de bautizo: #FechadeBautizo</li>
            <li>Número de libro de bautizo: #NumeroLibroBautizo</li>
            <li>Página de libro de bautizo: #NumeroPaginaBautizo</li>
            <li>Notas: #Notas</li>
            <li>Doy fe: #DoyFe</li>
            <li>Parroco: #Parroco</li>	
        </ul>
    </section>
    <footer>
        <img 
            src="../../storage/app/public/sello.png" 
            alt="Firma y/o Sello"
        >
    </footer>
</body>
</html>',
        'Tags' => '#NumerodeLibro, #NumerodePagina, #LugardeCelebracion, #Celebrante, #FechadeCelebracion, #Nombres, #ApellidoPaterno, #ApellidoMaterno, #RutConfirmado, #PapaNombre, #PapaApellido, #MamaNombre, #MamaApellido, #LugardeBautizo, #FechadeBautizo, #NumeroLibroBautizo, #NumeroPaginaBautizo, #Notas, #DoyFe, #Parroco',
        'updated_by' => ''
        ]);
        
        Certificate::create([
            'Nombre' => 'bautismo',
            'Codigo' => '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de Bautizo</title>
    <style>
        img {
            max-width: 20%;
            height: auto;	
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img
                src="../../storage/app/public/utem.png" 
                alt="Logo de la Parroquia"
            >
            <h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Bautizo</h1>
            <hr>
        </div>
    </header>
    <section>
        <ul>
            <li>Número libro: #NumerodeLibro</li>
            <li>Número de página: #NumerodePagina</li>
            <li>Lugar de celebración: #LugardeCelebracion</li>
            <li>Ministro: #Ministro</li>
            <li>Fecha de celenbración: #FechadeCelebracion</li>
            <li>Nombres: #Nombres</li>
            <li>Apellido paterno: #ApellidoPaterno</li>
            <li>Apellido materno: #ApellidoMaterno</li>
            <li>Rut: #RutBautizado</p></li>
            <li>Lugar de nacimiento: #LugardeNacimiento</li>
            <li>Fecha de nacimiento: #FechadeNacimiento</li>
            <li>Padre del Bautizado: #PapaNombre #PapaApellido</li>
            <li>Madre del Bautizado: #MamaNombre #MamaApellido</li>
            <li>Padrino: #Padrino</li>
            <li>Madrina: #Madrina</li>
            <li>Notas: #Notas</li>
            <li>Doy fe: #DoyFe</li>
            <li>Parroco: #Parroco</li>	
        </ul>
    </section>
    <footer>
        <img 
            src="../../storage/app/public/sello.png" 
            alt="Firma y/o Sello"
        >
    </footer>
</body>
</html>',
        'Tags' => '#NumerodeLibro, #NumerodePagina, #LugardeCelebracion, #Ministro, #FechadeCelebracion, #Nombres, #ApellidoPaterno, #ApellidoMaterno, #RutBautizado, #LugardeNacimiento, #FechadeNacimiento, #PapaNombre, #PapaApellido, #MamaNombre, #MamaApellido, #Padrino, #Madrina, #Notas, #DoyFe, #Parroco',
        'updated_by' => ''
        ]);
    }
}