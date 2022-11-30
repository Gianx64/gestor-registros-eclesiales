<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParishPriest
 *
 * @property $id
 * @property $Rut
 * @property $Nombre
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ParishPriest extends Model
{
    static $rules = [
		'Rut' => ['unique:parish_priests','required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
		'Nombre' => 'required|string|max:60',
    ];

    static $message = [
      'Rut.required' => 'El rut es un campo obligatorio',
      'Rut.string'   => 'El rut debe de ser una cadena de caracteres',
      'Rut.max'      => 'El campo rut es muy largo',
      'Rut.unique'   => 'El rut ingresado ya existe',
      'Rut.regex'    => 'El Rut ingresado no es válido, ejemplo Rut valido: 1.111.111-1 o 11.111.111-K',

      'Nombres.required' => 'Los nombres son requeridos',
      'Nombres.max'      => 'El campo nombres es muy largo',
      'Nombres.string'   => 'El nombre debe ser una cadena de caracteres',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','Nombre','updated_by'];
}