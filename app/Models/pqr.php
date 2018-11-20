<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pqr
 * @package App\Models
 * @version November 20, 2018, 8:14 pm UTC
 *
 * @property string nombre
 * @property string documento
 * @property string correo
 * @property string direccion
 * @property string telefono
 * @property string motivoSolicitud
 */
class pqr extends Model
{
    use SoftDeletes;

    public $table = 'pqrs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'documento',
        'correo',
        'direccion',
        'telefono',
        'motivoSolicitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'documento' => 'string',
        'correo' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'motivoSolicitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:5|max:255',
        'documento' => 'required|numeric',
        'correo' => 'required|min:10|max:255|email',
        'direccion' => 'required|min:5|max:255',
        'telefono' => 'required|numeric',
        'motivoSolicitud' => 'required|min:5|max:255'
    ];

    
}
