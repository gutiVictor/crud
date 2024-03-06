<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $persona_id
 * @property $rol_id
 * @property $clave
 * @property $habilitado
 * @property $fecha
 * @property $fecha_creacion
 * @property $usuario_creacion
 * @property $usuario_modificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona $persona
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'rol_id' => 'required',
		'clave' => 'required|string',
		'habilitado' => 'required|string',
		'fecha' => 'required',
		'fecha_creacion' => 'required',
		'usuario_creacion' => 'required',
		'usuario_modificacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','rol_id','clave','habilitado','fecha','fecha_creacion','usuario_creacion','usuario_modificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'persona_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'rol_id', 'id');
    }
    

}
