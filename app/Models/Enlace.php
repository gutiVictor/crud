<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enlace
 *
 * @property $id
 * @property $pagina_id
 * @property $rol_id
 * @property $descripcion
 * @property $fecha_creacion
 * @property $fecha_modificacion
 * @property $usuario_creacion
 * @property $usuario_modificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Pagina $pagina
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Enlace extends Model
{
    
    static $rules = [
		'pagina_id' => 'required',
		'rol_id' => 'required',
		'descripcion' => 'required|string',
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
    protected $fillable = ['pagina_id','rol_id','descripcion','fecha_creacion','fecha_modificacion','usuario_creacion','usuario_modificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pagina()
    {
        return $this->belongsTo(\App\Models\Pagina::class, 'pagina_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'rol_id', 'id');
    }
    

}
