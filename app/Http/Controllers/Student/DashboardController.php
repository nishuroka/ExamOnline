<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\ExamAnswer;
use App\Models\subject;
use App\Models\exam;
use App\Models\examquestion;

class DashboardController extends Controller
{
    public function results(){
        // $user = Auth::guard('student')->user()->id;
        // $fetch =  ExamAnswer::where('user_id', $user)->with('student')->get();
        $user = Auth::guard('student')->user()->grade_id;
        $fetch =  subject::where('grade_id', $user)->get();
        // dd($fetch);


        return view('student/PublishedResults/index',compact('fetch'));

    }

    public function exams($id){
        // dd('Hi');
        $subject = subject::find($id);
        $exams = exam::all();
        if (empty($subject)) {
            Flash::error('Exam not found');

            return redirect(route('dashboard'));
        }
        // dd("success");
        return view('student/PublishedResults/exammms',compact('subject','exams'));
       
    }

    public function examQuestion(Request $request, $id){
        $user = Auth::guard('student')->user()->id;
        $exam = ExamAnswer::where('exam_id',$id)->where('user_id',$user)->where('status',1)->with('examquestion')->get();
        $examquestionss = ExamAnswer::where('exam_id',$id)->where('user_id',$user)->where('status',1)->pluck('question_id');
        // dd($examquestionss);
         
        $examquestion = examquestion::where('id',$examquestionss)->where('exam_id',$id)->get();  
        // dd($examquestion->toarray());

       
        return view('student/PublishedResults/ExamAnswers/index',compact('exam','examquestion'));
       
    }
}
