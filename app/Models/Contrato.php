<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contrato
 * @package App\Models
 * @version November 23, 2018, 8:28 am UTC
 *
 * @property string numerocontrato
 * @property string horascontratadas
 * @property date fechainicio
 * @property date fechafin
 * @property integer docente_id
 * @property integer tipocontrato_id
 * @property integer jornada_id
 */
class Contrato extends Model
{
    use SoftDeletes;

    public $table = 'contratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'numerocontrato',
        'horascontratadas',
        'fechainicio',
        'fechafin',
        'docente_id',
        'tipocontrato_id',
        'jornada_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numerocontrato' => 'string',
        'horascontratadas' => 'string',
        'fechainicio' => 'date',
        'fechafin' => 'date',
        'docente_id' => 'integer',
        'tipocontrato_id' => 'integer',
        'jornada_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     public function Tipocontrato(){
       return $this->belongsTo('App\Models\tipocontrato','tipocontrato_id');
    }

    public function Docente()
    {
        return $this->belongsTo('App\Models\Docente');
    }

    public function Jornada()
    {
        return $this->belongsTo('App\Models\Jornada','id');
    }

    
}
