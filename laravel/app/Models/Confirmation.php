<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Confirmation
 *
 * @property $id
 * @property $Rut
 * @property $NumLibro
 * @property $NumPag
 * @property $Nombres
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $PapaNombre
 * @property $PapaApellido
 * @property $MamaNombre
 * @property $MamaApellido
 * @property $Padrino
 * @property $Madrina
 * @property $LugBautizo
 * @property $FecBautizo
 * @property $NumLibroBautizo
 * @property $NumPagBautizo
 * @property $Celebrante
 * @property $LugCel
 * @property $FecCel
 * @property $Parroco
 * @property $Notas
 * @property $DoyFe
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Confirmation extends Model
{
	use SoftDeletes;
    
    static $rules = [
        'Rut'               => ['unique:confirmations','required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
        'NumLibro'          => 'max:11', 
        'NumPag'            => 'max:11',
        'Nombres'           => 'required|string|max:60',
        'ApellidoPaterno'   => 'required|string|max:60',
        'ApellidoMaterno'   => 'required|string|max:60',
        'PapaNombre'        => 'string|max:60',
        'PapaApellido'      => 'string|max:60',
        'MamaNombre'        => 'string|max:60',
        'MamaApellido'      => 'string|max:60',
        'Padrino'           => 'string|max:60',
        'Madrina'           => 'string|max:60',
        'LugBautizo'        => 'required|string|max:60',
        'FecBautizo'        => 'required|date',
        'NumLibroBautizo'   => 'required|max:11',
        'NumPagBautizo'     => 'required|max:11',
        'Notas'             => 'max:100',
        'Celebrante'        => 'required|string|max:60',
        'LugCel'			=> 'required|string|max:60',
        'FecCel'            => 'required|date',
        'Parroco'           => 'required|string|max:60',
        'DoyFe'             => 'required|string|max:60'
    ];

    static $message = [
        'Rut.required' => 'El Rut del Confirmado es requerido',
        'Rut.max'      => 'El campo Rut del Confirmado es muy largo',
        'Rut.unique'   => 'El Rut ingresado ya existe',
        'Rut.regex'    => 'El Rut ingresado no es válido, ejemplo Rut valido: 1.111.111-1 o 11.111.111-K',

        //'NumLibro.required' => 'El Numero de Libro es requerido',
        'NumLibro.numeric'  => 'El valor debe ser un número',
        'NumLibro.integer'  => 'El valor debe de un entero conocido',

        //'NumPag.required' => 'El Numero de Pagina es requerido',
        'NumPag.numeric'  => 'El valor debe ser un número',
        'NumPag.integer'  => 'El valor debe de un entero conocido',

        'LugCel.required' => 'El Lugar de Celebracion es requerido',
        'LugCel.max'      => 'El campo Lugar de Celebracion es muy largo',

        'LugNac.string'    => 'El Lugar de Nacimiento debe ser una cadena de caracteres',
        
        'Celebrante.required' => 'El Celebrante es requerido',
        'Celebrante.max'      => 'El campo Celebrante es muy largo',
        'Celebrante.string'   => 'El Celebrante debe ser una cadena de caracteres',

        'FecCel.required' => 'La Fecha de Celebracion es requerida',
        'FecCel.date'     => 'La Fecha de Celebración debe de ser de tipo Date',

        'Confirmado.required' => 'El nombre del Confirmado es requerido',
        'Confirmado.max'      => 'El campo Confirmado es muy largo',
        'Confirmado.string'   => 'El Confirmado debe ser una cadena de caracteres',

        'ApellidoPaterno.max'    => 'El campo Apellido Paterno es muy largo',
        'ApellidoPaterno.string' => 'El Apellido Paterno debe ser una cadena de caracteres',

        'ApellidoMaterno.max'    => 'El campo Apellido Materno es muy largo',
        'ApellidoMaterno.string' => 'El Apellido Materno debe ser una cadena de caracteres',

        'PapaNombre.max'    => 'El campo Nombre del Papá es muy largo',
        'PapaNombre.string' => 'El Nombre del Papá debe ser una cadena de caracteres',

        'PapaApellido.max'    => 'El campo Apellido del Papá es muy largo',
        'PapaApellido.string' => 'El Apellido del Papá debe ser una cadena de caracteres',
        
        'MamaNombre.max'    => 'El campo Nombre de la Mamá es muy largo',
        'MamaNombre.string' => 'El Nombre de la Mamá debe ser una cadena de caracteres',
        
        'MamaApellido.max'    => 'El campo Apellido de la Mamá es muy largo',
        'MamaApellido.string' => 'El Apellido de la Mamá debe ser una cadena de caracteres',

        'Padrino.max'    => 'El campo Padrino es muy largo',
        'Padrino.string' => 'El Padrino debe ser una cadena de caracteres',

        'Madrina.max'    => 'El campo Madrina es muy largo',
        'Madrina.string' => 'El Madrina debe ser una cadena de caracteres',

        'LugBautizo.required' => 'El Lugar de bautizo del confirmado es requerido',
        'LugBautizo.max'      => 'El campo Lugar de bautizo es muy largo',
        'LugBautizo.string'   => 'El Lugar de bautizo debe ser una cadena de caracteres',

        'FecBautizo.required' => 'La fecha de Bautizo es requerido',
        'FecBautizo.date'     => 'La Fecha de Bautizo debe de ser de tipo Date',

        'NumLibroBautizo.required' => 'El Numero de libro de bautizos es requerido',
        'NumLibroBautizo.numeric'  => 'El Numero de libro de bautizos debe ser un número',
        'NumLibroBautizo.integer'  => 'El Numero de libro de bautizos debe de un entero conocido',

        'NumPagBautizo.required' => 'El Numero de la pagina del libro de bautizo es requerido',
        'NumPagBautizo.numeric'  => 'El Numero de la pagina del libro de bautizo debe ser un número',
        'NumPagBautizo.integer'  => 'El Numero de la pagina del libro de bautizo debe de un entero conocido',
        
        'Notas' => 'El campo Notas no puede tener más de 100 caracteres',

        'Parroco.required' => 'El Parroco es requerido',
        'Parroco.max'      => 'El campo Parroco es muy largo',
        'Parroco.string'   => 'El Parroco debe ser una cadena de caracteres',

        'DoyFe.required' => 'DoyFe es requerido',
        'DoyFe.max'      => 'El campo DoyFe es muy largo',
        'DoyFe.string'   => 'El campo DoyFe debe ser una cadena de caracteres',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','NumLibro','NumPag','Nombres','ApellidoPaterno','ApellidoMaterno','PapaNombre','PapaApellido','MamaNombre','MamaApellido','Padrino','Madrina','LugarBautizo','FecBautizo','NumLibroBautizo','NumPagBautizo','Celebrante','LugCel','FecCel','Parroco','Notas','DoyFe','updated_by'];
}
