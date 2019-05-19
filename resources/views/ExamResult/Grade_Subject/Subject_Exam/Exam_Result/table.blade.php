<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>Student ID</th>
        <th>Total Marks</th>
    </thead>
    <tbody>
        @forelse($exam as $exams)
        <tr>
            
            <td>{!! $exams->user_id !!}</td>
            <td>{!!$exams->Total!!}</td>
            <td>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <p>No Exam Added</p>
        @endforelse
    </tbody>
</table>