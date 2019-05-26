<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class subject
 * @package App\Models
 * @version April 8, 2019, 10:32 am UTC
 *
 * @property string sub_code
 * @property string subject
 * @property integer grade_id
 */
class subject extends Model
{
    use SoftDeletes;

    public $table = 'subjects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sub_code',
        'subject',
        'grade_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sub_code' => 'string',
        'subject' => 'string',
        'grade_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sub_code'=>'required|min:3|max:10',
        'subject'=>'required|min:5|max:50',
    ];

    public function quizes(){
        return $this->hasMany(quizquestion::class);
    }

    public function exams(){
        return $this->hasMany(exam::class);
    }

    public function grade(){
        return $this->belongsTo(grade::class);
    }



    
}
