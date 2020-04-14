<?php

namespace App\Repositories;

use App\Models\Paciente;
use App\Repositories\BaseRepository;

/**
 * Class PacienteRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:46 am UTC
*/

class PacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Paciente::class;
    }
}
