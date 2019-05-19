<table class="table table-responsive-sm table-striped" id="studentinfos-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <!-- <th>Password</th> -->
        <th>Grade Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($studentinfos as $studentinfo)
        <tr>
            <td>{!! $studentinfo->name !!}</td>
            <td>{!! $studentinfo->email !!}</td>
            <!-- <td>{!! $studentinfo->password !!}</td> -->
            <td>{!! $studentinfo->grade_id !!}</td>
            <td>
                {!! Form::open(['route' => ['studentinfos.destroy', $studentinfo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentinfos.show', [$studentinfo->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('studentinfos.edit', [$studentinfo->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>