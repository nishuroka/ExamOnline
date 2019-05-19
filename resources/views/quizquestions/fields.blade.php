<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', 'Question:') !!}
    {!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- Option1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option1', 'Option1:') !!}
    {!! Form::text('option1', null, ['class' => 'form-control']) !!}
</div>

<!-- Option2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option2', 'Option2:') !!}
    {!! Form::text('option2', null, ['class' => 'form-control']) !!}
</div>

<!-- Option3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option3', 'Option3:') !!}
    {!! Form::text('option3', null, ['class' => 'form-control']) !!}
</div>

<!-- Option4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option4', 'Option4:') !!}
    {!! Form::text('option4', null, ['class' => 'form-control']) !!}
</div>

<!-- Correct Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correct_answer', 'Correct Answer:') !!}
    {!! Form::select('correct_answer', ['option1' => 'option1', 'option2' => 'option2', 'option3' => 'option3', 'option4' => 'option4'], null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Review Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_review', 'Answer Review:') !!}
    {!! Form::textarea('answer_review', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    {!! Form::text('subject_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('quizquestions.index') !!}" class="btn btn-default">Cancel</a>
</div>
