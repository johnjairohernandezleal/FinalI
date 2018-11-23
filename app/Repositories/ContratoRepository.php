<?php

namespace App\Repositories;

use App\Models\Contrato;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContratoRepository
 * @package App\Repositories
 * @version November 23, 2018, 8:28 am UTC
 *
 * @method Contrato findWithoutFail($id, $columns = ['*'])
 * @method Contrato find($id, $columns = ['*'])
 * @method Contrato first($columns = ['*'])
*/
class ContratoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numerocontrato',
        'horascontratadas',
        'fechainicio',
        'fechafin',
        'docente_id',
        'tipocontrato_id',
        'jornada_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contrato::class;
    }
}
