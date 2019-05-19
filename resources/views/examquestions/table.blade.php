<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>Question</th>
        <th>Option1</th>
        <th>Option2</th>
        <th>Option3</th>
        <th>Option4</th>
        <th>Correct Answer</th>
        <th>Marks</th>
        <th>Exam Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($examquestions as $examquestion)
        <tr>
            <td>{!! $examquestion->question !!}</td>
            <td>{!! $examquestion->option1 !!}</td>
            <td>{!! $examquestion->option2 !!}</td>
            <td>{!! $examquestion->option3 !!}</td>
            <td>{!! $examquestion->option4 !!}</td>
            <td>{!! $examquestion->correct_answer !!}</td>
            <td>{!! $examquestion->marks !!}</td>
            <td>{!! $examquestion->exam_id !!}</td>
            <td>
                {!! Form::open(['route' => ['examquestions.destroy', $examquestion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('examquestions.show', [$examquestion->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('examquestions.edit', [$examquestion->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>