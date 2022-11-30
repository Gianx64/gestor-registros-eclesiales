<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Baptism
 *
 * @property $id
 * @property $Rut
 * @property $NumLibro
 * @property $NumPag
 * @property $Nombres
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $LugNac
 * @property $FecNac
 * @property $PapaNombre
 * @property $PapaApellido
 * @property $MamaNombre
 * @property $MamaApellido
 * @property $Padrino
 * @property $Madrina
 * @property $LugCel
 * @property $FecCel
 * @property $Ministro
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
class Baptism extends Model
{
	use SoftDeletes;
    
    static $rules = [
        'Rut'               => ['unique:baptisms','required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
        'NumLibro'          => 'numeric|min:0|integer',
        'NumPag'            => 'numeric|min:0|integer',
        'Nombres'           => 'required|string|max:60',
        'ApellidoPaterno'   => 'required|string|max:60',
        'ApellidoMaterno'   => 'required|string|max:60',
        'PapaNombre'        => 'string|max:60',
        'PapaApellido'      => 'string|max:60',
        'MamaNombre'        => 'string|max:60',
        'MamaApellido'      => 'string|max:60',
        'Padrino'           => 'string|max:60',
        'Madrina'           => 'string|max:60',
        'LugNac'            => 'string|max:60',
        'FecNac'            => 'required|date',
        'LugCel'            => 'required|string|max:60',
        'FecCel'            => 'required|date',
        'Ministro'          => 'required|string|max:60',
        'Parroco'           => 'required|string|max:60',
        'Notas'             => 'max:100',
        'DoyFe'             => 'required|string|max:60'
    ];

    static $message = [
        'Rut.required' => 'El RUT es un campo obligatorio',
        'Rut.string'   => 'El RUT debe de ser una cadena de caracteres',
        'Rut.max'      => 'El campo RUT es muy largo',
        'Rut.unique'   => 'El RUT ingresado ya existe',
        'Rut.regex'    => 'El RUT ingresado no es válido, ejemplo RUT valido: 1.111.111-1 o 11.111.111-K',

        //'NumLibro.required' => 'El número de libro es requerido',
        'NumLibro.numeric'  => 'El valor debe ser un número',
        'NumLibro.integer'  => 'El valor debe de un entero conocido',

        //'NumPag.required' => 'El número de pagina es requerido',
        'NumPag.numeric'  => 'El valor debe ser un número',
        'NumPag.integer'  => 'El valor debe de un entero conocido',

        'Nombres.required' => 'Los nombres son requeridos',
        'Nombres.max'      => 'El campo nombres es muy largo',
        'Nombres.string'   => 'El nombre debe ser una cadena de caracteres',

        'ApellidoPaterno.required' => 'El apellido paterno es requerido',
        'ApellidoPaterno.max'      => 'El campo apellido paterno es muy largo',
        'ApellidoPaterno.string'   => 'El apellido paterno debe ser una cadena de caracteres',

        'ApellidoMaterno.required' => 'El apellido materno es requerido',
        'ApellidoMaterno.max'      => 'El campo apellido materno es muy largo',
        'ApellidoMaterno.string'   => 'El apellido materno debe ser una cadena de caracteres',

        //'PapaNombre.required' => 'El nombre del padre es requerido',
        'PapaNombre.max'      => 'El campo nombre del padre es muy largo',
        'PapaNombre.string'   => 'El nombre del padre debe ser una cadena de caracteres',

        //'PapaApellido.required' => 'El apellido del padre es requirido',
        'PapaApellido.max'      => 'El campo apellido del padre es muy largo',
        'PapaApellido.string'   => 'El apellido del padre debe ser una cadena de caracteres',

        //'MamaNombre.required' => 'El nombre de la madre es requerida',
        'MamaNombre.max'      => 'El campo nombre de la madre es muy largo',
        'MamaNombre.string'   => 'El nombre de la madre debe ser una cadena de caracteres',
        
        //'MamaApellido.required' => 'El apellido de la madre es requirida',
        'MamaApellido.max'      => 'El campo apellido de la madre es muy largo',
        'MamaApellido.string'   => 'El apellido de la madre debe ser una cadena de caracteres',

        //'Padrino.required' => 'El padrino es requerido',
        'Padrino.max'      => 'El campo padrino es muy largo',
        'Padrino.string'   => 'El padrino debe ser una cadena de caracteres',

        //'Madrina.required' => 'La madrina es requerido',
        'Madrina.max'      => 'El campo madrina es muy largo',
        'Madrina.string'   => 'El madrina debe ser una cadena de caracteres',

        //'LugNac.required' => 'El lugar de nacimiento es requerido',
        'LugNac.max'      => 'El campo lugar de nacimiento es muy largo',
        'LugNac.string'   => 'El lugar de nacimiento debe ser una cadena de caracteres',

        'FecNac.required' => 'La fecha de nacimiento es requerida',
        'FecNac.date'     => 'La fecha de nacimiento debe de ser de tipo Date',

        'LugCel.required' => 'El lugar de celebración es requerido',
        'LugCel.max'      => 'El campo lugar de celebración es muy largo',
        'LugCel.string'   => 'El lugar de celebración debe ser una cadena de caracteres',

        'FecCel.required' => 'La fecha de celebración es requerida',
        'FecCel.date'     => 'La fecha de celebración debe de ser de tipo Date',

        'Ministro.required' => 'El celebrante es requerido',
        'Ministro.max'      => 'El campo celebrante es muy largo',
        'Ministro.string'   => 'El celebrante debe ser una cadena de caracteres',
        
        'Parroco.required' => 'El parroco es requerido',
        'Parroco.max'      => 'El campo parroco es muy largo',
        'Parroco.string'   => 'El parroco debe ser una cadena de caracteres',

        'Notas.max' => 'El campo no puede tener más de 100 caracteres',

        'DoyFe.required' => 'El campo doy fe es requerido',
        'DoyFe.max'      => 'El campo doy fe es muy largo',
        'DoyFe.string'   => 'El campo doy fe debe ser una cadena de caracteres',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
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
		'updated_by'
	];
}
