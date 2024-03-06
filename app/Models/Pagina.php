<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pagina
 *
 * @property $id
 * @property $fecha_creacion
 * @property $fecha_modificacion
 * @property $usuario_creacion
 * @property $usuario_modificacion
 * @property $nombre
 * @property $descripcion
 * @property $url
 * @property $icono
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Enlace[] $enlaces
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pagina extends Model
{
    
    static $rules = [
		'fecha_creacion' => 'required',
		'fecha_modificacion' => 'required',
		'usuario_creacion' => 'required|string',
		'usuario_modificacion' => 'required|string',
		'nombre' => 'required|string',
		'descripcion' => 'required|string',
		'url' => 'required|string',
		'icono' => 'required|string',
		'tipo' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_creacion','fecha_modificacion','usuario_creacion','usuario_modificacion','nombre','descripcion','url','icono','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enlaces()
    {
        return $this->hasMany(\App\Models\Enlace::class, 'id', 'pagina_id');
    }
    

}
