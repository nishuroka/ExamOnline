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
        <th colspan="3">Publish</th>
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
                    <a data-toggle="modal" data-target="#publishModal{!! $exam->id !!}" class='btn btn-ghost-success'><i class="fas fa-upload"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="publishModal{!! $exam->id !!}" tabindex="-1" role="dialog" aria-labelledby="publishModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publishModalLabel">Publish Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('publish-result',$exam->id)}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <p>You are going to publish the result of {!! $exam->exam_name !!}</p>
                            <select class="browser-default custom-select" name="status">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Publish</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No Exam Added</p>
        @endforelse
    </tbody>
</table>