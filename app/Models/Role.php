<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Enlace[] $enlaces
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enlaces()
    {
        return $this->hasMany(\App\Models\Enlace::class, 'id', 'rol_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id', 'rol_id');
    }
    

}
