<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\subject;
use App\Models\exam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\ExamAnswer;
use App\Models\examquestion;

class ExamController extends Controller
{
    public function exams($id)
    {
        $exam = subject::find($id)->exams;
        $subject = subject::all();
        return view('student/Exam.showExam', compact('exam', 'subject'));
    }

    public function startExam(Request $request, $id)
    {
        $examquestion = exam::orderByRaw('RAND()')->find($id)->examquestions;
        //$ = $e->paginate(5);
        //$examInfo = DB::select('select * from exams where id = 1');
        $count = count($examquestion);
        //dd($users);
        $examInfo = DB::table('exams')->where('id', $id)->first();
        $examID = $request->input('exam_id');
        $sub_id = DB::table('exams')->where('id', $id)->pluck('subject_id')->first();
        $subject = DB::table('subjects')->where('id', $sub_id)->first();

        // dd($examInfo);
        //exam::all()->where('id'->$id);
        // dd($examquestion);
        $exam = exam::all();

        return view('student/exam.giveExam', compact('examquestion', 'exam', 'examInfo', 'count', 'subject', 'sub_id', 'examID'));
    }

    public function letsSubmit(Request $request)
    {
        // $inputs = $request->all();

        // $examID = request()->examquestion_id;

        // $id = request()->chosenValue;

        $validateData = $request->validate([
            'examquestion_id' => 'required|max:255',
            'chosenValue' => 'required',
        ]);

        // $chosenValue = $request->get('examquestion_id');

        // $chosenValue = $request->get('chosenValue');

        // dd($id);

        // dd($chosenValue);
        $examquestions = ExamAnswer::create($validateData);
        return view('student/Exam/allTheBest');
    }

    public function send(Request $request)
    {
        //dd('ok');

        //    $right_ans = 0;
        //    $wrong_ans = 0;
        //    $obtain_marks =0;

        $examquestion = examquestion::where('exam_id', $request->exam_id)->select('correct_answer')->get();


      $correct_ans = null;
      $marks = 0;

      if(!empty($examquestion)){
      foreach($examquestion as $key => $q){
            $key++;
                if($q->correct_answer == $request->chosenValue[$key]){
                        $correct_ans = 'Correct';
                        $marks = $request->marks;
                }else{
                    $correct_ans = 'In Correct';
                    $marks = 0;
                }
            $answers[] = [
                'chosenValue' => $request->chosenValue[$key],
                'question_id' => $request->question_id[$key],
                'answer_review'=> $request->answer_review,
                'user_id' => $request->user_id,
                'answer' => $correct_ans,
                'exam_id' => $request->exam_id,
                'marks'=> $marks,
                
            ];

            }
        }




        ExamAnswer::insert($answers);


        return view('student/Exam/allTheBest');
    }
}
