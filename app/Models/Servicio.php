<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre_cliente
 * @property $telefono_cliente
 * @property $tipo_producto
 * @property $falla
 * @property $estado_repa
 * @property $presupuesto
 * @property $senia
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'nombre_cliente' => 'required',
		'telefono_cliente' => 'required',
		'tipo_producto' => 'required',
		'falla' => 'required',
		'estado_repa' => 'required',
		'presupuesto' => 'required',
		'senia' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cliente','telefono_cliente','tipo_producto','falla','estado_repa','presupuesto','senia','observacion'];



}
