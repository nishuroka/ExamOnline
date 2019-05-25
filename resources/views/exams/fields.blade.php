<!-- Ask Randomly Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ask_randomly', 'Ask Randomly:') !!}
    {!! Form::select('ask_randomly', ['yes' => 'yes', 'no' => 'no'], null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    {!! Form::select('subject_id',$sub, null, array('class' => 'form-control')) !!}
</div>

<!-- Exam Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_code', 'Exam Code:') !!}
    {!! Form::text('exam_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Exam Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_name', 'Exam Name:') !!}
    {!! Form::text('exam_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Exam Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_date', 'Exam Date:') !!}
    {!! Form::text('exam_date', null, ['class' => 'form-control','id'=>'exam_date']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#exam_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endsection


<!-- Exam Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_duration', 'Exam Duration in Minutes:') !!}
    {!! Form::number('exam_duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Marks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_marks', 'Total Marks:') !!}
    {!! Form::number('total_marks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('exams.index') !!}" class="btn btn-default">Cancel</a>
</div>
