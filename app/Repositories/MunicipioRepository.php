<?php

namespace App\Repositories;

use App\Models\Municipio;
use App\Repositories\BaseRepository;

/**
 * Class MunicipioRepository
 * @package App\Repositories
 * @version April 13, 2020, 6:48 pm UTC
*/

class MunicipioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'departamento',
        'provincia',
        'municipio',
        'localidad'
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
        return Municipio::class;
    }
}
