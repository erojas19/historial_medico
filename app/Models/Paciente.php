<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version April 14, 2020, 9:46 am UTC
 *
 * @property string nombre
 * @property string paterno
 * @property string materno
 * @property string telefono
 * @property string celular
 * @property string direccion
 * @property string zona
 * @property integer edad
 * @property string sexo
 */
class Paciente extends Model
{
    use SoftDeletes;

    public $table = 'pacientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'paterno',
        'materno',
        'telefono',
        'celular',
        'direccion',
        'zona',
        'edad',
        'sexo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'paterno' => 'string',
        'materno' => 'string',
        'telefono' => 'string',
        'celular' => 'string',
        'direccion' => 'string',
        'zona' => 'string',
        'edad' => 'integer',
        'sexo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'telefono' => 'min:3|max:50',
        'celular' => 'min:3|max:30',
        'direccion' => 'required',
        'edad' => 'required',
        'sexo' => 'required'
    ];

    
}
