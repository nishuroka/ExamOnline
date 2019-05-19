<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Question Number</th>
        <th>Marks</th>
        <th>Answer</th>
        <th>Review</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @forelse($exam as $subject)
        <tr>
            <td>{!! $subject->id !!}</td>
            <td>{!! $subject->question_id !!}</td>
            <td>{!! $subject->marks !!}</td>
            <td>{!! $subject->answer !!}</td>
            <td>{!! $answerReview->answer_review !!}</td>
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