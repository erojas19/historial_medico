<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medico
 * @package App\Models
 * @version April 13, 2020, 8:03 pm UTC
 *
 * @property string nombre
 * @property string paterno
 * @property string materno
 * @property string especialidad
 * @property string telefono
 */
class Medico extends Model
{
    use SoftDeletes;

    public $table = 'medicos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'paterno',
        'materno',
        'especialidad',
        'telefono'
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
        'especialidad' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:3',
        'telefono' => 'min:3|max:50'
    ];

    
}
