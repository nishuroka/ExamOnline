@extends('student/layout.master')
@section('title')
Quiz Practise
@endsection

@section('content')
<div class="outer-w3-agile col-xl mt-3">

<div class=" p-3 mt-3  bg-success">
    <div class="s-l">
    <h5>Exam: First Term</h5><br>
    <h5>Obtained Marks: 40</h5>
    </div>
</div>
    @forelse($fetch as $fet)
    <div>
        <label for="marks">Subjects:</label>
        <a href="{{url('gExam',$fet->id)}}">{{$fet->subject}}</a>
    </div>


    @empty
    <p>Your exams haven't been published yet</p>
    @endforelse
</div>
@endsection
