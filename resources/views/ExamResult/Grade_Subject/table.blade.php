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
                    <!-- <a href="{!! url('examresults', [$exm->id]) !!}" class='btn btn-ghost-success'><i class="fas fa-upload"></i></a> -->
                    <a data-toggle="modal" data-target="#publishModal{!! $exm->id !!}" class='btn btn-ghost-success'><i class="fas fa-upload"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="publishModal{!! $exm->id !!}" tabindex="-1" role="dialog" aria-labelledby="publishModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publishModalLabel">Submit Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('publish-result',$exm->id)}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <p>You are going to publish the result of {!! $exm->exam_name !!}</p>
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
        <p>No Subject Added</p>
        @endforelse
    </tbody>
</table>