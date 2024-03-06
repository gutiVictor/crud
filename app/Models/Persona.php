<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $primer_name
 * @property $segundo_name
 * @property $primer_apellido
 * @property $fecha_creacion
 * @property $fecha_modificacion
 * @property $usuario_creacion
 * @property $usuario_modificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'primer_name' => 'required|string',
		'segundo_name' => 'required|string',
		'primer_apellido' => 'required|string',
		'fecha_creacion' => 'required',
		'fecha_modificacion' => 'required',
		'usuario_creacion' => 'required|string',
		'usuario_modificacion' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['primer_name','segundo_name','primer_apellido','fecha_creacion','fecha_modificacion','usuario_creacion','usuario_modificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id', 'persona_id');
    }
    

}
