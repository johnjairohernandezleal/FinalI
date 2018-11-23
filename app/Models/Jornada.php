<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jornada
 * @package App\Models
 * @version November 23, 2018, 8:16 am UTC
 *
 * @property string codigo
 * @property string nombre
 */
class Jornada extends Model
{
    use SoftDeletes;

    public $table = 'jornadas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function Contratos()
    {
        return $this->hasMany('App\Models\contrato','id');
    }

    
}
