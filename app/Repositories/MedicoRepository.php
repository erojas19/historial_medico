<?php

namespace App\Repositories;

use App\Models\Medico;
use App\Repositories\BaseRepository;

/**
 * Class MedicoRepository
 * @package App\Repositories
 * @version April 13, 2020, 8:03 pm UTC
*/

class MedicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'paterno',
        'materno',
        'especialidad',
        'telefono'
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
        return Medico::class;
    }
}
