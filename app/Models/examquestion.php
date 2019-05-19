<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ExamAnswer;

/**
 * Class examquestion
 * @package App\Models
 * @version April 8, 2019, 5:15 pm UTC
 *
 * @property string question
 * @property string option1
 * @property string option2
 * @property string option3
 * @property string option4
 * @property string correct_answer
 * @property string answer_review
 * @property string marks
 * @property integer exam_id
 */
class examquestion extends Model
{
    use SoftDeletes;

    public $table = 'examquestions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'answer_review',
        'marks',
        'exam_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        'option1' => 'string',
        'option2' => 'string',
        'option3' => 'string',
        'option4' => 'string',
        'correct_answer' => 'string',
        'answer_review' => 'string',
        'marks' => 'string',
        'exam_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function examanswers(){
        return $this->hasMany(ExamAnswer::class);
    }

    public function exam(){
        return $this->belongsTo(exam::class);
    }

    
}
