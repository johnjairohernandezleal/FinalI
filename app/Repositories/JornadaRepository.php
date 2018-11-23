<?php

namespace App\Repositories;

use App\Models\Jornada;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JornadaRepository
 * @package App\Repositories
 * @version November 23, 2018, 8:16 am UTC
 *
 * @method Jornada findWithoutFail($id, $columns = ['*'])
 * @method Jornada find($id, $columns = ['*'])
 * @method Jornada first($columns = ['*'])
*/
class JornadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jornada::class;
    }
}
