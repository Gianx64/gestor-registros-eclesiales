<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Marriage
 *
 * @property $id
 * @property $NumLibro
 * @property $NumPag
 * @property $Parroquia
 * @property $Impedimiento
 * @property $RutEsposo
 * @property $NombresEsposo
 * @property $ApellidoPaternoEsposo
 * @property $ApellidoMaternoEsposo
 * @property $EstadoEsposo
 * @property $PapaNombresEsposo
 * @property $MamaNombresEsposo
 * @property $EdadEsposo
 * @property $ParroquiaBautismoEsposo
 * @property $NumLibroBautismoEsposo
 * @property $NumPagBautismoEsposo
 * @property $RutEsposa
 * @property $NombresEsposa
 * @property $ApellidoPaternoEsposa
 * @property $ApellidoMaternoEsposa
 * @property $EstadoEsposa
 * @property $PapaNombresEsposa
 * @property $MamaNombresEsposa
 * @property $EdadEsposa
 * @property $ParroquiaBautismoEsposa
 * @property $NumLibroBautismoEsposa
 * @property $NumPagBautismoEsposa
 * @property $SiendoTestigo
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
class Marriage extends Model
{
	use SoftDeletes;
    
    static $rules = [
        'Parroquia'               => 'required|string|max:60',
        'Impedimiento'            => 'required|string|max:60',
        'RutEsposo'               => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
        'ApellidoPaternoEsposo'   => 'required|string|max:60',
        'ApellidoMaternoEsposo'   => 'required|string|max:60',
        'EstadoEsposo'            => 'required|string|max:60',
        'PapaNombresEsposo'       => 'string|max:60',
        'MamaNombresEsposo'       => 'string|max:60',
        'EdadEsposo'              => 'required|numeric|integer',
        'ParroquiaBautismoEsposo' => 'required|string|max:60',
        'NumLibroBautismoEsposo'  => 'required|numeric|integer',
        'NumPagBautismoEsposo'    => 'required|numeric|integer',
        'RutEsposa'               => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
        'ApellidoPaternoEsposa'   => 'required|string|max:60',
        'ApellidoMaternoEsposa'   => 'required|string|max:60',
        'EstadoEsposa'            => 'required|string|max:60',
        'PapaNombresEsposa'       => 'string|max:60',
        'MamaNombresEsposa'       => 'string|max:60',
        'EdadEsposa'              => 'required|numeric|integer',
        'ParroquiaBautismoEsposa' => 'required|string|max:60',
        'NumLibroBautismoEsposa'  => 'required|numeric|integer',
        'NumPagBautismoEsposa'    => 'required|numeric|integer',
        'SiendoTestigo'           => 'required|string|max:100',
        'Celebrante'              => 'required|string|max:60',
        'LugCel'                  => 'required|string|max:60',
        'FecCel'                  => 'required|date',
        'Parroco'                 => 'required|string|max:60',
        'DoyFe'                   => 'required|string|max:60'
    ];

    static $message = [
        'NumLibro.required' => 'El número de libro es requerido',
        'NumLibro.numeric'  => 'El valor debe ser un número',
        'NumLibro.integer'  => 'El valor debe de un entero conocido',

        'NumPag.required' => 'El numero de página es requerido',
        'NumPag.numeric'  => 'El valor debe ser un número',
        'NumPag.integer'  => 'El valor debe de un entero conocido',

        'LugCel.required' => 'El lugar de celebracion es requerido',
        'LugCel.max' => 'El campo lugar de celebracion es muy largo',
        'LugCel.string' => 'El lugar de celebracion debe ser una cadena de caracteres',

        'Parroquia.required' => 'La parroquia es requerida',
        'Parroquia.max'      => 'El campo parroquia es muy largo',
        'Parroquia.string'   => 'La parroquia debe ser una cadena de caracteres',
        
        'FecCel.required' => 'La fecha de celebración es requerida',
        'FecCel.date'     => 'La fecha de celebración debe de ser de tipo Date',
        
        'Impedimiento.required' => 'El impedimiento es requerido',
        'Impedimiento.max'      => 'El campo impedimiento es requerido',
        'Impedimiento.string'   => 'El impedimiento debe ser una cadena de caracteres',
        
        'RutEsposo.required' => 'El rut del esposo es requerido',
        'RutEsposo.max'      => 'El campo rut del esposo es muy largo',
        'RutEsposo.string'   => 'El rut del esposo debe de ser una cadena de caracteres',
        'RutEsposo.unique'   => 'El rut del esposo ingresado ya existe',
        'RutEsposo.regex'    => 'El Rut ingresado no es valido, ejemplo Rut valido: 11.111.111-1 o 11.111.111-K',

        'ApellidoPaternoEsposo.required' => 'El apellido paterno del esposo es requerido',
        'ApellidoPaternoEsposo.max'      => 'El campo apellido paterno del esposo es muy largo',
        'ApellidoPaternoEsposo.string'   => 'El apellido paterno del esposo debe ser una cadena de caracteres',

        'ApellidoMaternoEsposo.required' => 'El apellido materno del esposo es requerido',
        'ApellidoMaternoEsposo.max'      => 'El campo apellido materno del esposo es muy largo',
        'ApellidoMaternoEsposo.string'   => 'El apellido materno del esposo debe ser una cadena de caracteres',
        
        'EstadoEsposo.required' => 'El estado del esposo es requerido',
        'EstadoEsposo.max'      => 'El campo estado del esposo es muy largo',
        'EstadoEsposo.string'   => 'El estado del esposo debe ser una cadena de caracteres',

        'PapaNombreEsposo.max'    => 'El campo nombre del padre del esposo es muy largo',
        'PapaNombreEsposo.string' => 'El nombre del padre del esposo debe ser una cadena de caracteres',

        'MamaNombreEsposo.max'    => 'El campo nombre de la madre del esposo muy largo',
        'MamaNombreEsposo.string' => 'El nombre de la madre del esposo debe ser una cadena de caracteres',

        'EdadEsposo.required' => 'La edad del esposo es requerido',
        'EdadEsposo.numeric'  => 'La edad del esposo debe ser un número',
        'EdadEsposo.integer'  => 'La edad del esposo debe de un entero conocido',

        'ParroquiaBautismoEsposo.required' => 'La parroquia del bautizo del esposo es requerida',
        'ParroquiaBautismoEsposo.max'      => 'El campo parroquia del bautizo del esposo es muy largo',
        'ParroquiaBautismoEsposo.string'   => 'La parroquia del bautizo del esposo debe ser una cadena de caracteres',

        'NumLibroBautismoEsposo.required' => 'El número de libro de bautizos del esposo es requerido',
        'NumLibroBautismoEsposo.numeric'  => 'El número de libro de bautizos del esposo debe ser un número',
        'NumLibroBautismoEsposo.integer'  => 'El número de libro de bautizos del esposo debe de un entero conocido',

        'NumPagBautismoEsposo.required' => 'El número de la página del libro de bautizo del esposo es requerido',
        'NumPagBautismoEsposo.numeric'  => 'El número de la página del libro de bautizo del esposo debe ser un número',
        'NumPagBautismoEsposo.integer'  => 'El número de la página del libro de bautizo del esposo debe de un entero conocido',
        
        'RutEsposa.required' => 'El rut de la esposa es requerido',
        'RutEsposa.max'      => 'El campo rut de la esposa es muy largo',
        'RutEsposa.string'   => 'El rut de la esposa debe de ser una cadena de caracteres',
        'RutEsposa.unique'   => 'El rut de la esposa ingresado ya existe',
        'RutEsposa.regex'    => 'El Rut ingresado no es valido, ejemplo Rut valido: 11.111.111-1 o 11.111.111-K',

        'ApellidoPaternoEsposa.required' => 'El apellido paterno de la esposa es requerido',
        'ApellidoPaternoEsposa.max'      => 'El campo apellido paterno de la esposa es muy largo',
        'ApellidoPaternoEsposa.string'   => 'El apellido paterno de la esposa debe ser una cadena de caracteres',

        'ApellidoMaternoEsposa.required' => 'El apellido materno de la esposa es requerido',
        'ApellidoMaternoEsposa.max'      => 'El campo apellido materno de la esposa es muy largo',
        'ApellidoMaternoEsposa.string'   => 'El apellido materno de la esposa debe ser una cadena de caracteres',
        
        'EstadoEsposa.required' => 'El estado de la esposa es requerido',
        'EstadoEsposa.max'      => 'El campo estado de la esposa es muy largo',
        'EstadoEsposa.string'   => 'El estado de la esposa debe ser una cadena de caracteres',

        'PapaNombreEsposa.max'    => 'El campo nombre del padre de la esposa es muy largo',
        'PapaNombreEsposa.string' => 'El nombre del padre de la esposa debe ser una cadena de caracteres',

        'MamaNombreEsposa.max'    => 'El campo nombre de la madre de la esposa muy largo',
        'MamaNombreEsposa.string' => 'El nombre de la madre de la esposa debe ser una cadena de caracteres',

        'EdadEsposa.required' => 'La edad de la esposa es requerido',
        'EdadEsposa.numeric'  => 'La edad de la esposa debe ser un número',
        'EdadEsposa.integer'  => 'La edad de la esposa debe de un entero conocido',

        'ParroquiaBautismoEsposa.required' => 'La parroquia de bautizo de la esposa es requerida',
        'ParroquiaBautismoEsposa.max'      => 'El campo parroquia de bautizo de la esposa es muy largo',
        'ParroquiaBautismoEsposa.string'   => 'La parroquia de bautizo de la esposa debe ser una cadena de caracteres',

        'NumLibroBautismoEsposa.required' => 'El número de libro de bautizos de la esposa es requerido',
        'NumLibroBautismoEsposa.numeric'  => 'El número de libro de bautizos de la esposa debe ser un número',
        'NumLibroBautismoEsposa.integer'  => 'El número de libro de bautizos de la esposa debe de un entero conocido',

        'NumPagBautismoEsposa.required' => 'El número de la página del libro de bautizo de la esposa es requerido',
        'NumPagBautismoEsposa.numeric'  => 'El número de la página del libro de bautizo de la esposa debe ser un número',
        'NumPagBautismoEsposa.integer'  => 'El número de la página del libro de bautizo de la esposa debe de un entero conocido',

        'SiendoTestigo.required' => 'El campo de los testigos es requerids',
        'SiendoTestigo.max'      => 'El campo de los testigos es muy largo',
        'SiendoTestigo.string'   => 'El campo de los testigos debe ser una cadena de caracteres',

        'Celebrante.required' => 'El celebrante es requerido',
        'Celebrante.max'      => 'El campo celebrante es muy largo',
        'Celebrante.string'   => 'El celebrante debe ser una cadena de caracteres',

        'Notas.max' => 'El campo Notas no puede tener más de 100 caracteres',

        'Parroco.required' => 'El parroco es requerido',
        'Parroco.max'      => 'El campo parroco es muy largo',
        'Parroco.string'   => 'El parroco debe ser una cadena de caracteres',

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
    protected $fillable = ['NumLibro','NumPag','Parroquia','Impedimiento','Celebrante','RutEsposo','NombresEsposo','ApellidoPaternoEsposo','ApellidoMaternoEsposo','EstadoEsposo','PapaNombresEsposo','MamaNombresEsposo','EdadEsposo','ParroquiaBautismoEsposo','NumLibroBautismoEsposo','NumPagBautismoEsposo','RutEsposa','NombresEsposa','ApellidoPaternoEsposa','ApellidoMaternoEsposa','EstadoEsposa','PapaNombresEsposa','MamaNombresEsposa','EdadEsposa','ParroquiaBautismoEsposa','NumLibroBautismoEsposa','NumPagBautismoEsposa','SiendoTestigo','LugCel','FecCel','Parroco','Notas','DoyFe','updated_by'];



}
