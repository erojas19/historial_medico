<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FichaPaciente
 * @package App\Models
 * @version April 14, 2020, 10:56 am UTC
 *
 * @property string fecha_registro
 * @property integer medico_id
 * @property integer paciente_id
 * @property integer municipio_id
 * @property string enfermedades_antecedentes
 * @property string medicacion_actual
 * @property string seguro_salud
 * @property string convivientes
 * @property string contacto_personas
 * @property string sintomas
 * @property string diagnostico
 * @property string conducta
 * @property string seguimiento_paciente
 * @property string observaciones
 * @property string calles_frecuentadas
 */
class FichaPaciente extends Model
{
    use SoftDeletes;

    public $table = 'ficha_pacientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_registro',
        'medico_id',
        'paciente_id',
        'municipio_id',
        'enfermedades_antecedentes',
        'medicacion_actual',
        'seguro_salud',
        'convivientes',
        'contacto_personas',
        'sintomas',
        'diagnostico',
        'conducta',
        'seguimiento_paciente',
        'observaciones',
        'calles_frecuentadas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_registro' => 'date',
        'medico_id' => 'integer',
        'paciente_id' => 'integer',
        'municipio_id' => 'integer',
        'enfermedades_antecedentes' => 'string',
        'medicacion_actual' => 'string',
        'seguro_salud' => 'string',
        'convivientes' => 'string',
        'contacto_personas' => 'string',
        'sintomas' => 'string',
        'diagnostico' => 'string',
        'conducta' => 'string',
        'seguimiento_paciente' => 'string',
        'observaciones' => 'string',
        'calles_frecuentadas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_registro' => 'required',
        'medico_id' => 'required',
        'paciente_id' => 'required',
        'municipio_id' => 'required'
    ];

    
}
