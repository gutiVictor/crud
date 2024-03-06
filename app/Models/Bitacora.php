<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bitacora
 *
 * @property $id
 * @property $user_id
 * @property $fecha
 * @property $hora
 * @property $ip
 * @property $so
 * @property $navegador
 * @property $usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bitacora extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'fecha' => 'required',
		'hora' => 'required',
		'ip' => 'required|string',
		'so' => 'required|string',
		'navegador' => 'required|string',
		'usuario' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','fecha','hora','ip','so','navegador','usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    

}
