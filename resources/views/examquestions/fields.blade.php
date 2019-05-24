<!-- Question Field -->
<div class="form-group col-sm-12">
    {!! Form::label('question', 'Question:') !!}
    {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
</div>

<!-- Option1 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('option1', 'Option1:') !!}
    {!! Form::textarea('option1', null, ['class' => 'form-control']) !!}
</div>

<!-- Option2 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('option2', 'Option2:') !!}
    {!! Form::textarea('option2', null, ['class' => 'form-control']) !!}
</div>

<!-- Option3 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('option3', 'Option3:') !!}
    {!! Form::textarea('option3', null, ['class' => 'form-control']) !!}
</div>

<!-- Option4 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('option4', 'Option4:') !!}
    {!! Form::textarea('option4', null, ['class' => 'form-control']) !!}
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

<!-- Marks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marks', 'Marks:') !!}
    {!! Form::number('marks', null, ['class' => 'form-control']) !!}
</div>

<!-- Exam Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exam_id', 'Exam Id:') !!}
    {!! Form::select('exam_id',$examquestion, null, array('class' => 'form-control')) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('examquestions.index') !!}" class="btn btn-default">Cancel</a>
</div>


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'question' );
    CKEDITOR.replace( 'option1' );
    CKEDITOR.replace( 'option2' );
    CKEDITOR.replace( 'option3' );
    CKEDITOR.replace( 'option4' );
    CKEDITOR.replace('answer_review');
</script>
