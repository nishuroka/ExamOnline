<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Grade</th>
        <th>Subjects</th>
        <th>Added At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach($grades as $grade)
        <tr>
            <td>{!! $grade->id !!}</td>
            <td>{!! $grade->class !!}</td>
            <td><a href="{{route('showSubject',$grade->id)}}"><i class="fa fa-folder-open">&nbsp;{{$grade->subjects->count()}}</i></a></td>
            <td>{!! $grade->created_at !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('showGrade', [$grade->id]) !!}" class='btn btn-ghost-success'><i class="fas fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>