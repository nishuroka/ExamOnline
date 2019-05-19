<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Subject Code</th>
        <th>Exams</th>
        <th>Added At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($exam as $exm)
        <tr>
            <td>{!! $subject->id !!}</td>
            <td>{!! $subject->sub_code !!}</td>
            <!-- <td><a href="{{url('showExam',$subject->id)}}"><i class="fa fa-folder-open">&nbsp;{{$subject->exams->count()}}</i></a></td> -->
            <td>{!! $subject->created_at !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! url('examresults', [$subject->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Subject Added</p>
        @endforelse
    </tbody>
</table>