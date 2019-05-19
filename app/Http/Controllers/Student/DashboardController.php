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

    public function examQuestion($id){
        // dd('Hi');
        $user = Auth::guard('student')->user()->id;
        // $exam = examquestion::where('exam_id',$id)->where('user_id',$user)->selectRaw('user_id, SUM(marks) as Total')->groupBy('user_id')->get();        
        $exam = ExamAnswer::with('examquestion')->where('exam_id',$id)->where('user_id',$user)->get();        
        $answerReview = examquestion::where('id',$id)->first();
        // dd($answerReview->toarray());
        // if (empty($subject)) {
        //     Flash::error('Exam not found');

        //     return redirect(route('dashboard'));
        // }
        // dd("success");
        return view('student/PublishedResults/ExamAnswers/index',compact('exam','answerReview'));
       
    }
}
