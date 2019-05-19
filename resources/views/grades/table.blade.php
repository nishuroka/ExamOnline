<table class="table table-responsive-sm table-striped" id="grades-table">
    <thead>
        <th>Class</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($grades as $grade)
        <tr>
            <td>{!! $grade->class !!}</td>
            <td>
                {!! Form::open(['route' => ['grades.destroy', $grade->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('grades.show', [$grade->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('grades.edit', [$grade->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>