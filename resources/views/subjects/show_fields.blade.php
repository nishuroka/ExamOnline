<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $subject->id !!}</p>
</div>

<!-- Sub Code Field -->
<div class="form-group">
    {!! Form::label('sub_code', 'Sub Code:') !!}
    <p>{!! $subject->sub_code !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $subject->subject !!}</p>
</div>

<!-- Grade Id Field -->
<div class="form-group">
    {!! Form::label('grade_id', 'Grade Id:') !!}
    <p>{!! $subject->grade_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $subject->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $subject->updated_at !!}</p>
</div>

