<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ExamAnswer;
use App\User;

/**
 * Class exam
 * @package App\Models
 * @version April 8, 2019, 10:37 am UTC
 *
 * @property string ask_randomly
 * @property integer subject_id
 * @property string exam_code
 * @property string exam_name
 * @property string exam_date
 * @property string start_time
 * @property string exam_duration
 * @property string total_marks
 */
class exam extends Model
{
    use SoftDeletes;

    public $table = 'exams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ask_randomly',
        'subject_id',
        'exam_code',
        'exam_name',
        'exam_date',
        'start_time',
        'exam_duration',
        'total_marks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ask_randomly' => 'string',
        'subject_id' => 'integer',
        'exam_code' => 'string',
        'exam_name' => 'string',
        'exam_date' => 'string',
        'start_time' => 'string',
        'exam_duration' => 'string',
        'total_marks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'exam_code'=>'required|min:3|max:10|unique:exams',
        'exam_name'=>'required|min:5|max:100',
        'exam_date'=>'required',
        'exam_duration'=>'required|min:5|max:100',
        'total_marks'=>'required|min:5|max:100'
    ];

    public function examanswers(){
        return $this->hasMany(ExamAnswer::class);
    }

    public function examquestions()
    {
        return $this->hasMany(examquestion::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function subject(){
        return $this->belongsTo(subject::class);
    }

    
    
}
