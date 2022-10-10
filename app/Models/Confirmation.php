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
 * @property $LugarBautizo
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
 * @property $status
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
		'Rut' => 'required',
		'Nombres' => 'required',
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'LugarBautizo' => 'required',
		'FecBautizo' => 'required',
		'Celebrante' => 'required',
		'LugCel' => 'required',
		'FecCel' => 'required',
		'Parroco' => 'required',
		'DoyFe' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','NumLibro','NumPag','Nombres','ApellidoPaterno','ApellidoMaterno','PapaNombre','PapaApellido','MamaNombre','MamaApellido','Padrino','Madrina','LugarBautizo','FecBautizo','NumLibroBautizo','NumPagBautizo','Celebrante','LugCel','FecCel','Parroco','Notas','DoyFe'];



}
