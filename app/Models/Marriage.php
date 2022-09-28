<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marriage
 *
 * @property $id
 * @property $NumLibro
 * @property $NumPag
 * @property $CiudadCelebracion
 * @property $LugardeCelebracion
 * @property $Parroquia
 * @property $FechaCelebracion
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
 * @property $PaginaPartida
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
class Marriage extends Model
{
    
    static $rules = [
		'NumLibro' => 'required',
		'NumPag' => 'required',
		'CiudadCelebracion' => 'required',
		'LugardeCelebracion' => 'required',
		'Parroquia' => 'required',
		'FechaCelebracion' => 'required',
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
		'PaginaPartida' => 'required',
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
    protected $fillable = ['NumLibro','NumPag','CiudadCelebracion','LugardeCelebracion','Parroquia','FechaCelebracion','Impedimiento','Celebrante','RutEsposo','NombresEsposo','ApellidoPaternoEsposo','ApellidoMaternoEsposo','EstadoEsposo','PapaNombresEsposo','MamaNombresEsposo','EdadEsposo','ParroquiaBautismoEsposo','NumLibroBautismoEsposo','NumPagBautismoEsposo','RutEsposa','NombresEsposa','ApellidoPaternoEsposa','ApellidoMaternoEsposa','EstadoEsposa','PapaNombresEsposa','MamaNombresEsposa','EdadEsposa','ParroquiaBautismoEsposa','NumLibroBautismoEsposa','NumPagBautismoEsposa','SiendoTestigo','PaginaPartida','Notas','Parroco','DoyFe','Usuario_modificacion','status'];



}
