<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $nombre
 * @property $categoria_articulo
 * @property $ubicacion
 * @property $cantidad
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria_articulo' => 'required',
		'ubicacion' => 'required',
		'cantidad' => 'required',
		'proveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','categoria_articulo','ubicacion','cantidad','proveedor'];



}
