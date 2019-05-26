@extends('student/layout.master')
@section('title')
Student Dashboard
@endsection

@section('content')
<!--// three-grids -->
<div class="container-fluid">
  <div class="row">
    <!-- Profile -->
    <div class="outer-w3-agile mb-3 mx-xl-3 p-xl-0 px-md-5 col-md-4">
      <div class="header">
        <div class="text">
          <img src="{{ URL('student-css/images/profile.png')}}" class="img-fluid rounded-circle" alt="Responsive image">
          <h2>{!! Auth::guard('student')->user()->name !!}</h2>
          <a href="mailto:info@example.com">
            <p>{!! Auth::guard('student')->user()->email !!}</p>
          </a>
        </div>
      </div>
     
     
    </div>
    <!--// Profile -->
    <!-- Stats -->
    <div class="outer-w3-agile col-xl mb-3">
      <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
        <div class="s-l">
          <h5>Courses</h5>
          <p class="paragraph-agileits text-white">Courses you are registered to.</p>
        </div>
        <div class="s-r">
          <h6>{{$c}}
            <i class="far fa-edit"></i>
          </h6>
        </div>
      </div>
      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
        <div class="s-l">
          <h5>Quizes</h5>
          <p class="paragraph-agileits text-white">Avilable Practise Quizes</p>
        </div>
        <div class="s-r">
          <h6>250
            <i class="far fa-smile"></i>
          </h6>
        </div>
      </div>
      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
        <div class="s-l">
          <h5>Exams</h5>
          <p class="paragraph-agileits text-white">Exams List</p>
        </div>
        <div class="s-r">
          <h6>232
            <i class="fas fa-tasks"></i>
          </h6>
        </div>
      </div>
      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
        <div class="s-l">
          <h5>MCQs</h5>
          <p class="paragraph-agileits">Multiple Choises</p>
        </div>
        <div class="s-r">
          <h6>190
            <i class="fas fa-users"></i>
          </h6>
        </div>
      </div>
    </div>
    <!--// Stats -->

  </div>
  <!--row-->
</div>
<!--container-->
<!--// Three-grids -->


<div class="container-fluid">
  <div class="row">


    <!-- Calender -->
    <div class="outer-w3-agile col-xl mb-3">
      <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
      <div class="multi-select-calender"></div>
      <div class="box"></div>
    </div>
    <!--// Calender -->



    <!-- Pie-chart -->
    <!-- <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
      <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
      <div id="chartdiv"></div>
    </div> -->
    <!--// Pie-chart -->
  </div>
</div>

<!--Three grids-->
<div class="container-fluid">
  <div class="row">
    <!-- Courses -->
    <div class="outer-w3-agile col-xl mt-3">
      <h4 class="tittle-w3-agileits mb-4">Courses</h4>
      <p>The courses enrolled to you are following:</p>
      @foreach($subject as $subs)

      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
        <div class="s-l">
          <h5>{{$subs->subject}}</h5>

        </div>
        <div class="s-r">
          <h6>
            <i class="fas fa-book-reader"></i>
          </h6>
        </div>
      </div>

      @endforeach
    </div>
    <!--// Courses -->
    <!-- Quizes -->
    <div class="outer-w3-agile col-xl mt-3 mx-xl-3 ">
      <h4 class="tittle-w3-agileits mb-4">Quizes</h4>
      <p>Practise quizes for following subjects.</p>
      @foreach($subject as $subs)

      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
        <div class="s-l">
          <h5><a href="{{route('filterQuiz',$subs->id)}}">{{$subs->subject}}</a></h5>

        </div>
        <div class="s-r">
          <h6>
            <i class="fas fa-tasks"></i>
          </h6>
        </div>
      </div>

      @endforeach
    </div>
    <!--// Quizes -->
    <!-- Browser stats -->
    <div class="outer-w3-agile col-xl mt-3">
      <h4 class="tittle-w3-agileits mb-4">Exams</h4>
      <p>Exams For following subjects</p>
      @foreach($subject as $subs)

      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
        <div class="s-l">
          <h5><a href="{{route('showExamStu',$subs->id)}}">{{$subs->subject}}</a></h5>

        </div>
        <div class="s-r">
          <h6>
            <i class="fas fa-graduation-cap"></i>
          </h6>
        </div>
      </div>

      @endforeach
    </div>
    <!--// Browser stats -->
  </div>
</div>
<!--//Three grids-->

<!--Three grids-->
<div class="container-fluid">
  <div class="row">
    <!-- Courses -->
    <!-- <div class="outer-w3-agile col-xl mt-3">
      <h4 class="tittle-w3-agileits mb-4">Exams</h4>

      @foreach($subject as $subs)

      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-primary">
        <div class="s-l">
          <h5><a href="{{route('showExamStu',$subs->id)}}">{{$subs->subject}}</a></h5>

        </div>
        <div class="s-r">
          <h6>
            <i class="fas fa-book-reader"></i>
          </h6>
        </div>
      </div>

      @endforeach
    </div> -->
    <!--// Courses -->
    <!-- Quizes -->
    <!-- <div class="outer-w3-agile col-xl mt-3 mx-xl-3 ">
      <h4 class="tittle-w3-agileits mb-4">Quizes</h4>
      <p>Practise quizes for following subjects.</p>
      @foreach($subject as $subs)

      <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
        <div class="s-l">
          <h5><a href="{{route('filterQuiz',$subs->id)}}">{{$subs->subject}}</a></h5>

        </div>
        <div class="s-r">
          <h6>
            <i class="fas fa-tasks"></i>
          </h6>
        </div>
      </div>

      @endforeach
    </div> -->
    <!--// Quizes -->
    <!-- Browser stats -->
    <!-- <div class="outer-w3-agile col-xl mt-3">
      <h4 class="tittle-w3-agileits mb-4">Browser Stats</h4>
      <div class="stats-info stats-body">
        <ul class="list-unstyled">
          <li class="pb-3">GoogleChrome
            <span class="float-right">85%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar green" style="width:85%;"></div>
            </div>
          </li>
          <li class="py-md-4 py-3">Firefox
            <span class="float-right">35%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar yellow" style="width:35%;"></div>
            </div>
          </li>
          <li class="py-md-4 py-3">Internet Explorer
            <span class="float-right">78%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar red" style="width:78%;"></div>
            </div>
          </li>
          <li class="py-md-4 py-3">Safari
            <span class="float-right">50%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar blue" style="width:50%;"></div>
            </div>
          </li>
          <li class="py-md-4 py-3">Opera
            <span class="float-right">80%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar light-blue" style="width:80%;"></div>
            </div>
          </li>
          <li class="last py-md-4 py-3">Others
            <span class="float-right">60%</span>
            <div class="progress progress-striped active progress-right">
              <div class="bar orange" style="width:60%;"></div>
            </div>
          </li>
        </ul>
      </div>
    </div> -->
    <!--// Browser stats -->
  </div>
</div>
<!--//Three grids-->
<!--// Bar-Chart -->

<!--// Bar-Chart -->


<!-- Countdown -->
<!-- <div class="outer-w3-agile mt-3 outer-w3-agile-bg">
  <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
  <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
</div> -->
<!--// Countdown -->
@endsection

@section('js-files')
<!-- Bar-chart -->
<script src="{{ asset('student-css/js/rumcaJS.js')}}"></script>
    <script src="{{ asset('student-css/js/example.js')}}"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="{{ asset('student-css/js/moment.min.js')}}"></script>
    <script src="{{ asset('student-css/js/calender.js')}}"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        ' TO ' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="{{ asset('student-css/js/script.js')}}"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="{{asset ('student-css/js/countdown.js')}}"></script>
    <link href="{{ asset('student-css/css/countdown.css')}}" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src="{{asset ('student-css/js/chart.js')}}"></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
            country: "Lithuania",
            value: 260
        },
        {
            country: "Ireland",
            value: 201
        },
        {
            country: "Germany",
            value: 65
        },
        {
            country: "Australia",
            value: 39
        },
        {
            country: "UK",
            value: 19
        },
        {
            country: "Latvia",
            value: 10
        }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

@endsection