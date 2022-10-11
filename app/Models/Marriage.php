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
 * @property $Celebrante
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
class Marriage extends Model
{
	use SoftDeletes;
    
    static $rules = [
		'Parroquia' => 'required',
		'Impedimiento' => 'required',
		'Celebrante' => 'required',
		'RutEsposo' => 'required',
		'NombresEsposo' => 'required',
		'ApellidoPaternoEsposo' => 'required',
		'ApellidoMaternoEsposo' => 'required',
		'EstadoEsposo' => 'required',
		'EdadEsposo' => 'required',
		'ParroquiaBautismoEsposo' => 'required',
		'NumLibroBautismoEsposo' => 'required',
		'NumPagBautismoEsposo' => 'required',
		'RutEsposa' => 'required',
		'NombresEsposa' => 'required',
		'ApellidoPaternoEsposa' => 'required',
		'ApellidoMaternoEsposa' => 'required',
		'EstadoEsposa' => 'required',
		'EdadEsposa' => 'required',
		'ParroquiaBautismoEsposa' => 'required',
		'NumLibroBautismoEsposa' => 'required',
		'NumPagBautismoEsposa' => 'required',
		'SiendoTestigo' => 'required',
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
    protected $fillable = ['NumLibro','NumPag','Parroquia','Impedimiento','Celebrante','RutEsposo','NombresEsposo','ApellidoPaternoEsposo','ApellidoMaternoEsposo','EstadoEsposo','PapaNombresEsposo','MamaNombresEsposo','EdadEsposo','ParroquiaBautismoEsposo','NumLibroBautismoEsposo','NumPagBautismoEsposo','RutEsposa','NombresEsposa','ApellidoPaternoEsposa','ApellidoMaternoEsposa','EstadoEsposa','PapaNombresEsposa','MamaNombresEsposa','EdadEsposa','ParroquiaBautismoEsposa','NumLibroBautismoEsposa','NumPagBautismoEsposa','SiendoTestigo','LugCel','FecCel','Parroco','Notas','DoyFe'];



}
