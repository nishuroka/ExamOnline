@extends('/student/layout.master')
@section('title')
Student Dashboard
@endsection

@section('content')
<div class="outer-w3-agile mt-3">
    <?php $q=0;?>
    @foreach($exam as $subs)
    <?php $q++;?>

    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
        <div class="s-l">
            <!-- <h2>Maths Exam</h2><br> -->
            <!-- <input type="text" value="{{$q}}" id="ite"> -->
            <h5 class=" text-white" style="display:inline;">Exam Code: </h5>
                <p class="paragraph-agileits text-white" style="display:inline;">{{$subs->exam_code}} </p><br>
            <h5 class=" text-white" style="display:inline;">Exam Name: </h5>
                <p class="paragraph-agileits text-white" style="display:inline;">{{$subs->exam_name}} </p><br>
                <input type="hidden" name="exam_id" value="{{$subs->id}}">
            <h5 class=" text-white" style="display:inline;">Exam Date: </h5>
                <p class="paragraph-agileits text-white" style="display:inline;">{{$subs->exam_date}} </p><br>
            <h5 class=" text-white" style="display:inline;">Exam Duration: </h5>
                <p class="paragraph-agileits text-white" style="display:inline;">{{$subs->exam_duration}} min </p><br>
            <h5 class=" text-white" style="display:inline;">Total Marks: </h5>
                <p class="paragraph-agileits text-white" style="display:inline;">{{$subs->total_marks}} </p><br>
        </div>
        <div class="s-r">
        @if (date("Y-m-d",strtotime($subs['exam_date'])) == date("Y-m-d"))
            <h6>
            <a href="{{route('giveExam',$subs->id)}}" target="_blank">
         
           
            <!-- <button class="btn btn-danger" value="{{$subs->id}}" id="Sid{{$q}}"  onclick="exam()">Start Exam</button> -->
                <button class="btn btn-danger" >Start Exam</button>


            </a>
            </h6>
            @endif
            <!-- <p></p> -->
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('js-files')
<script type="text/javascript">
    function exam(){
        var w = document.getElementById('ite').value;
        console.log(w);
        var q = document.getElementById("Sid" + document.getElementById('ite').value ).value;
    @foreach($exam as $subs)
        
        var win = window.open("{{route('giveExam',$subs->id)}}",'1366002941508','width=500,height=200,left=375,top=330');
@endforeach
        setTimeout(function () { win.close();}, 3000);
    }
</script>
@endsection

<!-- <div class="col-md-4" id="myDIV">
        @foreach($exam as $subs)
        <p><a href="{{route('giveExam',$subs->id)}}"><button>{{$subs->exam_name}}</button></a></p>

        @endforeach
    </div> -->