<table class="table table-responsive-sm table-striped" id="exams-table">
    <thead>
        <th>Ask Randomly</th>
        <th>Subject Id</th>
        <th>Exam Code</th>
        <th>Exam Name</th>
        <th>Exam Date</th>
        <th>Exam Duration</th>
        <th>Total Marks</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($exams as $exam)
        <tr>
            <td>{!! $exam->ask_randomly !!}</td>
            <td>{!! $exam->subject_id !!}</td>
            <td>{!! $exam->exam_code !!}</td>
            <td>{!! $exam->exam_name !!}</td>
            <td>{!! $exam->exam_date !!}</td>
            <td>{!! $exam->exam_duration !!}</td>
            <td>{!! $exam->total_marks !!}</td>
            <td>
                {!! Form::open(['route' => ['exams.destroy', $exam->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('exams.show', [$exam->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('exams.edit', [$exam->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>