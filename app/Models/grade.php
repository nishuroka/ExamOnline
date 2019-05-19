<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class grade
 * @package App\Models
 * @version April 8, 2019, 10:30 am UTC
 *
 * @property string class
 */
class grade extends Model
{
    use SoftDeletes;

    public $table = 'grades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function subjects(){
        return $this->hasMany(subject::class);
    }

    
}
