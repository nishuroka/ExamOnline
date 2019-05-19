<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Question</th>
        <th>Option 1</th>
        <th>Option 2</th>
        <th>Option 3</th>
        <th>Option 4</th>
        <th>Correct Answer</th>
        <th>Answer Review</th>
        <th>Chosen Value</th>
        <th>Marks</th>
        <th>Added At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($exam->examquestions as $exams)
        <tr>
            <td>{{$exams->id}}</td>
            <td>{!! $exams->question !!}</td>
            <td>{!! $exams->option1 !!}</td>
            <td>{!! $exams->option2 !!}</td>
            <td>{!! $exams->option3 !!}</td>
            <td>{!! $exams->option4 !!}</td>
            <td>{!! $exams->correct_answer !!}</td>
            <td>{!! $exams->answer_review !!}</td>
            <td>{!! $exams->chosenValue !!}</td>
            <td>{!! $exams->marks !!}</td>
            <td>{!! $exams->created_at !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! url('examresults', [$exams->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Exam Added</p>
        @endforelse
    </tbody>
</table>