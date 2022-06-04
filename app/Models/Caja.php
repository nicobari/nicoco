<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caja
 *
 * @property $id
 * @property $articulo
 * @property $unidades
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caja extends Model
{
    
    static $rules = [
		'articulo' => 'required',
		'unidades' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['articulo','unidades','precio'];



}
