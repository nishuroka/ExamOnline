<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class studentinfo
 * @package App\Models
 * @version April 8, 2019, 10:34 am UTC
 *
 * @property string name
 * @property string email
 * @property string password
 * @property integer grade_id
 */
class studentinfo extends Model
{
    use SoftDeletes;

    public $table = 'studentinfos';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'grade_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'grade_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
