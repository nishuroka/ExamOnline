<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Exam Code</th>
        <th>Exam name</th>
        <th>Student Count</th>
        <th>Exam date</th>
        <th>Start Time</th>
        <th>Exam Duration</th>
        <th>Total Marks</th>
        <th>Added At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($subject->exams as $exam)
        <tr>
            <td>{{$exam->id}}</td>
            <!-- <td><a href="{{url('showPaper',$exam->id)}}">{!! $exam->exam_code !!}</a></td> -->
            <td>{!! $exam->exam_code !!}</td>
            <td>{!! $exam->exam_name !!}</td>
            <td><a href="{{url('showResult',$exam->id)}}"><i class="fa fa-folder-open">&nbsp;{{$exam->examanswers()->distinct('user_id')->count('user_id')}}</i></a></td>
            <td>{!! $exam->exam_date !!}</td>
            <td>{!! $exam->start_time !!}</td>
            <td>{!! $exam->exam_duration !!}</td>
            <td>{!! $exam->total_marks !!}</td>
            <td>{!! $exam->created_at !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! url('examresults', [$exam->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Exam Added</p>
        @endforelse
    </tbody>
</table>