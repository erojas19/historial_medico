<?php

namespace App\Repositories;

use App\Models\FichaPaciente;
use App\Repositories\BaseRepository;

/**
 * Class FichaPacienteRepository
 * @package App\Repositories
 * @version April 14, 2020, 10:56 am UTC
*/

class FichaPacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FichaPaciente::class;
    }
}
