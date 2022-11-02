<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $role
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasRoles;
    
    static $rules = [
		'name' => 'required|string',
		'email' => 'required|string|unique:users,email',
		'password' => 'required|string|confirmed',
    ];

    static $message = [
        'name.required' => 'El nombre de usuario es requerido',
        'email.required' => 'El email es requerido',
        'email.unique' => 'El email ya está registrado',
        'password.required' => 'La contraseña es requerida',
        'password.confirmed' => 'Las contraseñas no coinciden'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password'];



}
