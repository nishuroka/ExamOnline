<!-- Sub Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_code', 'Sub Code:') !!}
    {!! Form::text('sub_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Grade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grade_id', 'Grade Id:') !!}
    {!! Form::select('grade_id' ,$class, null, array('class' => 'form-control')) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('subjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
