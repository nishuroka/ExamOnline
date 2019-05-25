<table class="table table-responsive-sm table-striped" id="examquestions-table">
    <thead>
        <th>ID</th>
        <th>Question Number</th>
        <th>Question</th>
        <th>Marks</th>
        <th>Answer</th>
        <th>Review</th>
        
    </thead>
    <tbody>
        @forelse($exam as $subject)
        <tr>
            <td>{!! $subject->id !!}</td>
            <td>{!! $subject->question_id !!}</td>
            @forelse($examquestion as $question)
            <td>{!! $question->question !!}</td>
            <td>{!! $question->answer_review !!}</td>
            @empty
            <p>No</p>
            @endforelse
            <td>{!! $subject->marks !!}</td>
            <td>{!! $subject->answer !!}</td>
            
        </tr>
        @empty
        <p>Result hasn't been published yet.</p>
        @endforelse
    </tbody>
</table>