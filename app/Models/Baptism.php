<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
 * @property $LugardeNacimiento
 * @property $FecNac
 * @property $PapaNombre
 * @property $PapaApellido
 * @property $MamaNombre
 * @property $MamaApellido
 * @property $Padrino
 * @property $Madrina
 * @property $LugardeCelebracion
 * @property $FecCel
 * @property $Ministro
 * @property $Parroco
 * @property $Notas
 * @property $DoyFe
 * @property $Usuario_modificacion
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Baptism extends Model
{
    
    static $rules = [
		'Rut' => 'required',
		'NumLibro' => 'required',
		'NumPag' => 'required',
		'Nombres' => 'required',
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'LugardeNacimiento' => 'required',
		'FecNac' => 'required',
		'PapaNombre' => 'required',
		'PapaApellido' => 'required',
		'MamaNombre' => 'required',
		'MamaApellido' => 'required',
		'Padrino' => 'required',
		'Madrina' => 'required',
		'LugardeCelebracion' => 'required',
		'FecCel' => 'required',
		'Ministro' => 'required',
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
    protected $fillable = ['Rut','NumLibro','NumPag','Nombres','ApellidoPaterno','ApellidoMaterno','LugardeNacimiento','FecNac','PapaNombre','PapaApellido','MamaNombre','MamaApellido','Padrino','Madrina','LugardeCelebracion','FecCel','Ministro','Parroco','Notas','DoyFe','Usuario_modificacion','status'];



}
