<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class quizquestion
 * @package App\Models
 * @version April 8, 2019, 5:32 pm UTC
 *
 * @property string question
 * @property string option1
 * @property string option2
 * @property string option3
 * @property string option4
 * @property string correct_answer
 * @property string answer_review
 * @property integer subject_id
 */
class quizquestion extends Model
{
    use SoftDeletes;

    public $table = 'quizquestions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'answer_review',
        'subject_id'
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
        'subject_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question' => 'required|min:3',
        'option1' => 'required',
        'option2' => 'required',
        'option3' => 'required',
        'option4' => 'required',
        'answer_review' => 'required',
    ];

    public function subject(){
        return $this->belongsTo(subject::class);
    }

    public function exam(){
        return $this->hasMany(exam::class);
    }

    
}
