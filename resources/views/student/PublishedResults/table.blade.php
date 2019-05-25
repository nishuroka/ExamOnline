<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Exam name</th>
        <th>Exam date</th>
        <th>Total Marks</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($subject->exams as $exam)
        <tr>
            <td>{{$exam->id}}</td>
            <td>{!! $exam->exam_name !!}</td>
            <td>{!! $exam->exam_date !!}</td>
            <td>{!! $exam->total_marks !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{{url('exammmQuestion',$exam->id)}}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Exam Added</p>
        @endforelse
    </tbody>
</table>