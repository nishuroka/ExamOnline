<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exam</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- CSS Global -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="/css/home-style.css" rel="stylesheet">
    <style type="text/css">
        html {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="timer pull-right">
            <div class="panel panel-info">
                <div class="panel-heading">Timer</div>
                <div class="panel-body">Time Left: <span id="duration-min">{{$examInfo->exam_duration}}</span></div>



            </div>
        </div>
        <!--Timer-->


        <div class="clearfix"></div>
        <div class="name ">
            <div class="panel panel-info">
                <div class="panel-heading">Exam Name: {{$examInfo->exam_name}}</div>
                <div class="panel-body">
                    <p>Subject: {{$subject->subject}}</p>
                    <p> Questions: {{$count}}</p>
                    <p> Marks: {{$examInfo->total_marks}}</p>
                    <p> Time: {{$examInfo->exam_duration}} min</p>
                </div>
            </div>
            <!--name-->
            <!-- <div class="help pull-right">
                <div class="panel panel-danger">
                    <div class="panel-heading">Questions</div>
                    <div class="panel-body">
                        All of these are microorganisms, except:
                    </div>
                </div>
            </div> -->
            <!--help-->
            <!-- Form open -->

            <form action="{{route('submitExam')}}" method="POST">
                @csrf
                <?php $count = 0; ?>
                @foreach($examquestion as $key => $exam)
                <?php $count++; ?>
                <div class="question pull-left">
                    <div class="panel panel-info">
                        <div class="panel-heading">Question: {{$count}}</div>
                        <div class="panel-body">
                            {{$exam->question}}
                            <br>
                            <!-- <input type="hidden" name="subject_id" value="{{$sub_id}}"> -->
                            <input type="hidden" name="exam_id" value="{{$exam->exam_id}}">
                            <span class="pull-right">Marks: {{$exam->marks}}</span>
                            <input type="hidden" name="marks" value="{{$exam->marks}}">
                            <div class="clearfix"></div>
                            <input type="hidden" name="question_id[{{$count}}]" value="{{$exam->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::guard('student')->user()->id}}">

                            <label class="radio-inline">
                                <input type="radio" name="chosenValue[{{$count}}]" value="option1">{{$exam->option1}}
                            </label><br>

                            <!-- <input type="hidden" name="exam_id" value="{{$exam->id}}"> -->
                            <label class="radio-inline">
                                <input type="radio" name="chosenValue[{{$count}}]" value="option2">{{$exam->option2}}
                            </label><br>
                            <label class="radio-inline">
                                <input type="radio" name="chosenValue[{{$count}}]" value="option3">{{$exam->option3}}
                            </label><br>
                            <label class="radio-inline">
                                <input type="radio" name="chosenValue[{{$count}}]" value="option4">{{$exam->option4}}
                            </label>

                        </div>
                        <!-- <div class="panel-body">
					<button type="button" class="btn btn-success">Save & Next</button>
					<span class="pull-right">
						<button type="button" class="btn btn-warning">Previous</button>
						<button type="button" class="btn btn-danger">Next</button>
					</span>
					
				</div> -->
                    </div>
                </div>
                @endforeach
                <!--question-->

                <div class="clearfix"></div>
                <button type="submit" class="btn btn-success">Submit Exam</button>
            </form>
        </div>
        <!--container-->
        </form>
        <!-- form close -->


        <script>
            function startTimer(duration, display) {
                var timer = duration,
                    minutes, seconds;
                setInterval(function() {
                    minutes = parseInt(timer / 60, 10)
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                    if (--timer < 0) {
                        document.getElementById("duration-min").innerHTML = "EXPIRED";
                    }
                }, 1000);
            }

            window.onload = function() {
                var tim = document.getElementById("duration-min").innerHTML;
                var fiveMinutes = 60 * tim,
                    display = document.querySelector('#duration-min');
                startTimer(fiveMinutes, display);
            };
        </script>
</body>

</html>


<!-- @foreach($examquestion as $exam)
<label for="question">{{$exam->question}}</label><br>
     <input type="text">

    @endforeach -->