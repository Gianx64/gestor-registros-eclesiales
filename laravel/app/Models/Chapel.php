<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chapel
 *
 * @property $id
 * @property $Nombre
 * @property $Direccion
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chapel extends Model
{
    
    static $rules = [
		'Nombre' => 'required|string|max:60',
    'Direccion' => 'string|max:60',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Direccion','updated_by'];



}
