<table class="table table-responsive-sm table-striped" id="subjects-table">
    <thead>
        <th>Sub Code</th>
        <th>Subject</th>
        <th>Grade Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subjects as $subject)
        <tr>
            <td>{!! $subject->sub_code !!}</td>
            <td>{!! $subject->subject !!}</td>
            <td>{!! $subject->grade_id !!}</td>
            <td>
                {!! Form::open(['route' => ['subjects.destroy', $subject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subjects.show', [$subject->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('subjects.edit', [$subject->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>