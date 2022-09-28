<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Confirmation
 *
 * @property $id
 * @property $NumLibro
 * @property $NumPag
 * @property $LugardeCelebracion
 * @property $Celebrante
 * @property $RutConfirmado
 * @property $FecCel
 * @property $Confirmado
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $Padre
 * @property $Madre
 * @property $Padrino
 * @property $Madrina
 * @property $LugarBautizo
 * @property $FecBautizo
 * @property $NumLibroBautizo
 * @property $NumPagBautizo
 * @property $Notas
 * @property $Parroco
 * @property $DoyFe
 * @property $Usuario_modificacion
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Confirmation extends Model
{
    
    static $rules = [
		'NumLibro' => 'required',
		'NumPag' => 'required',
		'LugardeCelebracion' => 'required',
		'Celebrante' => 'required',
		'RutConfirmado' => 'required',
		'FecCel' => 'required',
		'Confirmado' => 'required',
		'LugarBautizo' => 'required',
		'FecBautizo' => 'required',
		'NumLibroBautizo' => 'required',
		'NumPagBautizo' => 'required',
		'Parroco' => 'required',
		'DoyFe' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NumLibro','NumPag','LugardeCelebracion','Celebrante','RutConfirmado','FecCel','Confirmado','ApellidoPaterno','ApellidoMaterno','Padre','Madre','Padrino','Madrina','LugarBautizo','FecBautizo','NumLibroBautizo','NumPagBautizo','Notas','Parroco','DoyFe','Usuario_modificacion','status'];



}
