<?php

namespace App\Repositories;

use App\Models\Profesion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfesionRepository
 * @package App\Repositories
 * @version November 23, 2018, 8:14 am UTC
 *
 * @method Profesion findWithoutFail($id, $columns = ['*'])
 * @method Profesion find($id, $columns = ['*'])
 * @method Profesion first($columns = ['*'])
*/
class ProfesionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profesion::class;
    }
}
