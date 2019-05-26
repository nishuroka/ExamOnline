<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Question Number</th>
        <!-- <th>Question</th> -->
        <th>Marks</th>
        <th>Answer</th>
        <th>Review</th>

    </thead>
    <tbody>
        @forelse($examquestionss as $subject)
        <tr>
            <td>{!! $subject->id !!}</td>
            <td>{!! $subject->question_id !!}</td>

            <td>{!! $subject->marks !!}</td>
            <td>{!! $subject->answer !!}</td>
            <td>{!! $subject->answer_review !!}</td>


        </tr>
        @empty
        <p>Result hasn't been published yet.</p>
        @endforelse
    </tbody>
</table>