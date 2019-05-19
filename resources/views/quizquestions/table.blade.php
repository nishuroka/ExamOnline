<table class="table table-responsive-sm table-striped" id="quizquestions-table">
    <thead>
        <th>Question</th>
        <th>Option1</th>
        <th>Option2</th>
        <th>Option3</th>
        <th>Option4</th>
        <th>Correct Answer</th>
        <th>Subject Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($quizquestions as $quizquestion)
        <tr>
            <td>{!! $quizquestion->question !!}</td>
            <td>{!! $quizquestion->option1 !!}</td>
            <td>{!! $quizquestion->option2 !!}</td>
            <td>{!! $quizquestion->option3 !!}</td>
            <td>{!! $quizquestion->option4 !!}</td>
            <td>{!! $quizquestion->correct_answer !!}</td>
            <td>{!! $quizquestion->subject_id !!}</td>
            <td>
                {!! Form::open(['route' => ['quizquestions.destroy', $quizquestion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('quizquestions.show', [$quizquestion->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('quizquestions.edit', [$quizquestion->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>