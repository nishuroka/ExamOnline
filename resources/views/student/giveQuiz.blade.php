@extends('student/layout.master')
@section('title')
Quiz Practise
@endsection

@section('content')
<h2 class="main-title-w3layouts mb-2 text-center">Course ko name</h2>
<div class="outer-w3-agile mt-3">
  <h4 class="tittle-w3-agileits mb-4">Practise</h4>
  <?php $q=0;  ?>
  @foreach($quiz as $qui)
  <?php $q++; 
  ?>
  
  <div class="stat-grid p-3 d-flex align-items-center justify-content-between ">
    <div class="" style="width: 100%;">
      <h4>{{$q}}. {{$qui->question}}</h4>
      <div class="mt-3 ml-3">
        <p class="paragraph-agileits-w3layouts mt-2">
          <label>
            <input type="radio" name="{{$q}}" value="option1" onClick="Answer(this);">
            {{$qui->option1}}
          </label>
        </p>
        <p class="paragraph-agileits-w3layouts mt-2">
        <label>
          <input type="radio" name="{{$q}}" value="option2" onClick="Answer(this);">
          {{$qui->option2}}
          </label>
        </p>
        <p class="paragraph-agileits-w3layouts mt-2">
        <label>
          <input type="radio" name="{{$q}}" value="option3" onClick="Answer(this);">
          {{$qui->option3}}
          </label>
        </p>
        <p class="paragraph-agileits-w3layouts mt-2">
        <label>
          <input type="radio" name="{{$q}}" value="option4" onClick="Answer(this);">
          {{$qui->option4}}
          </label>
        </p>
        <p id="correct{{$q}}" style="display:none;">Correct Answer</p>
        <p id="not{{$q}}"  style="display:none;">Wrong Answer</p> 
        <input hidden id="ans-{{$q}}" value="{{$qui->correct_answer}}"/>
        <div class="text-right">
          <button disabled id="check{{$q}}" name = {{$q}} onclick="Review(this)" class="btn btn-success mt-3">Check Answer</button>
        </div>
      </div><!--mt-3-->
      <div id="rev{{$q}}" style="display:none;">
        <h4>Answer Review:</h4>
        <p> {{$qui->answer_review}}
      </div>
    </div>
  </div>
  @endforeach
</div>

<script>
  function Answer(obj){
    sel = obj.value; //Option1
    sel_name = 'ans-' + obj.name;
    document.getElementById("check"+ obj.name).disabled = false;
    correct = document.getElementById("correct"+ obj.name );
    wrong = document.getElementById("not"+ obj.name);
    
    right = document.getElementById(sel_name).value; //option1
    //alert(sel);
    //console.log('obj', obj);
    //console.log('right', right);
    
    if (sel == right){
      correct.style.display = "block";
      wrong.style.display = "none";

    }else{

      wrong.style.display = "block";
      correct.style.display = "none";
    }

  }
  function Review(obj){
    var a = obj.name;
    var x = document.getElementById("rev" + obj.name);
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
@endsection


