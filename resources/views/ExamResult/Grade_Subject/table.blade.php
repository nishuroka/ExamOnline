<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Subject Code</th>
        <th>Exams</th>
        <th>Added At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($grade as $exm)
        <tr>
            <td>{!! $exm->id !!}</td>
            <td>{!! $exm->sub_code !!}</td>
            <td><a href="{{url('showExam',$exm->id)}}"><i class="fa fa-folder-open">&nbsp;{{$exm->exams->count()}}</i></a></td>
            <td>{!! $exm->created_at !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! url('examresults', [$exm->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Subject Added</p>
        @endforelse
    </tbody>
</table>