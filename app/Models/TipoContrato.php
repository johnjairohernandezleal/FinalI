<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoContrato
 * @package App\Models
 * @version November 23, 2018, 8:15 am UTC
 *
 * @property string nombre
 */
class TipoContrato extends Model
{
    use SoftDeletes;

    public $table = 'tipo_contratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
