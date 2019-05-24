<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grade;
use App\Models\subject;
use App\Models\exam;
use App\Models\examquestion;
use App\ExamAnswer;
use Illuminate\Support\Facades\DB;


class ExamResultController extends Controller
{
    public function index()
    {
        $grades = grade::all();
        return view('ExamResult.index', compact('grades'));
    }

    public function subject($id)
    {
        // dd('Hi');
        $grade = grade::find($id)->subjects;
        $subjects = subject::all();
        if (empty($grade)) {
            Flash::error('grade not found');

            return redirect(route('examresults'));
        }
        return view('ExamResult/Grade_Subject.grade_subject', compact('grade', 'subjects'));
    }

    public function exam($id)
    {
        // dd('Hi');
        $subject = subject::find($id);
        $exam = exam::all();
        if (empty($subject)) {
            Flash::error('exam not found');

            return redirect(route('examresults'));
        }
        return view('ExamResult/Grade_Subject/Subject_Exam.index', compact('subject', 'exam'));
    }

    public function paper($id)
    {
        // dd('Hi');
        $exam = exam::find($id);
        // $questionanswer = examquestion::with('examanswers')->first();
        $examquestion = examquestion::all();
        if (empty($exam)) {
            Flash::error('exam not found');

            return redirect(route('examresults'));
        }
        return view('ExamResult/Grade_Subject/Subject_Exam/Exam_Paper.index', compact('exam', 'questionanswer', 'examquestion'));
    }

    public function result($id)
    {

        // $data['exam'] = exam::with(array('examanswers'=>function($query){
        //         $query->with('student')->get();
        // }))->findOrFail($id);
        // dd($data['exam']->toArray());

        //  $exam = ExamAnswer::where('exam_id',$id)->select('user_id')->groupBy('user_id')->get();
        //  $exam = Exam::findOrFail($id)->examanswers;
        // $correctans = 0;
        // $wrongans = 0;

        // dd($exam);
        $exam = ExamAnswer::where('exam_id', $id)->selectRaw('user_id, SUM(marks) as Total')->groupBy('user_id')->get();

        return view('ExamResult/Grade_Subject/Subject_Exam/Exam_Result.index', compact('exam'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request, $id)
    {
        // $result = [
        //     'status' => $request->status,
        // ];
        // $publish = ExamAnswer::update($request->status);
        DB::table('exam_answers')
            ->where("exam_answers.exam_id", '=',  $id)
            ->update(['exam_answers.status' => 1]);
        // ExamAnswer::create($result);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = grade::findOrFail($id);

        if (empty($grade)) {
            Flash::error('grade not found');

            return redirect(route('examresult.index'));
        }

        return view('examresult.show')->with('grade', $grade);
    }
}
