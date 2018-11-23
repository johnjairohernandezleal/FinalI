<?php

namespace App\Repositories;

use App\Models\TipoContrato;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoContratoRepository
 * @package App\Repositories
 * @version November 23, 2018, 8:15 am UTC
 *
 * @method TipoContrato findWithoutFail($id, $columns = ['*'])
 * @method TipoContrato find($id, $columns = ['*'])
 * @method TipoContrato first($columns = ['*'])
*/
class TipoContratoRepository extends BaseRepository
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
        return TipoContrato::class;
    }
}
