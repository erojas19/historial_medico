<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Municipio
 * @package App\Models
 * @version April 13, 2020, 6:48 pm UTC
 *
 * @property string departamento
 * @property string provincia
 * @property string municipio
 * @property string localidad
 */
class Municipio extends Model
{
    use SoftDeletes;

    public $table = 'municipios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'departamento',
        'provincia',
        'municipio',
        'localidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'departamento' => 'string',
        'provincia' => 'string',
        'municipio' => 'string',
        'localidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'departamento' => 'required',
        'provincia' => 'required',
        'municipio' => 'required',
        'localidad' => 'required'
    ];

    
}
