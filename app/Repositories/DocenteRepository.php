<?php

namespace App\Repositories;

use App\Models\Docente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocenteRepository
 * @package App\Repositories
 * @version November 23, 2018, 8:22 am UTC
 *
 * @method Docente findWithoutFail($id, $columns = ['*'])
 * @method Docente find($id, $columns = ['*'])
 * @method Docente first($columns = ['*'])
*/
class DocenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'documento',
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'profesion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Docente::class;
    }
}
