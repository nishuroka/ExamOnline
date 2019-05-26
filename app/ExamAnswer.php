<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\examquestion;
use App\Models\exam;
use App\Models\Student;

class ExamAnswer extends Model
{
    protected $fillable = [
        'question_id',
        'answer',
        'chosenValue',
        'user_id',
        'answer_review',
        'status',
        'exam_given',
    ];

    public function examquestion(){
        return $this->belongsTo(examquestion::class);
    }

    public function exam(){
        return $this->belongsTo(exam::class);
    }

    public function student(){
        return $this->belongsTo(Student::class,'user_id');
    }
}
