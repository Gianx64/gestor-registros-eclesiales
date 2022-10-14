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
		'Rut' => 'required',
		'Nombres' => 'required',
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'LugNac' => 'required',
		'FecNac' => 'required',
		'LugCel' => 'required',
		'FecCel' => 'required',
		'Ministro' => 'required',
		'Parroco' => 'required',
		'DoyFe' => 'required',
		'updated_by' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','NumLibro','NumPag','Nombres','ApellidoPaterno','ApellidoMaterno','LugNac','FecNac','PapaNombre','PapaApellido','MamaNombre','MamaApellido','Padrino','Madrina','LugCel','FecCel','Ministro','Parroco','Notas','DoyFe','updated_by'];



}
