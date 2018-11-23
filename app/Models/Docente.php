<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Docente
 * @package App\Models
 * @version November 23, 2018, 8:22 am UTC
 *
 * @property string documento
 * @property string nombre
 * @property string apellidos
 * @property string telefono
 * @property string email
 * @property integer profesion_id
 */
class Docente extends Model
{
    use SoftDeletes;

    public $table = 'docentes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'documento',
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'profesion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'documento' => 'string',
        'nombre' => 'string',
        'apellidos' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'profesion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function profesions(){

      return $this->belongsTo('App\Models\profesion','profesion_id');
    }

    public function Contratos()
    {
        return $this->hasMany('App\Models\contrato');
    }

    
}
