<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\subject;

class QuizController extends Controller
{
    public function filterQuiz($id){
            $quiz = subject::find($id)->quizes;
            $subject=subject::all();
            return view ('student.giveQuiz',compact('quiz','subject'));
    }

    public function rules(){
        return view ('student.rules');
    }
    public function tips(){
        return view ('student.tips');
    }
    
}
