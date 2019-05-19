@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{\App\Models\student::count()}}</h3>

              <p>Students</p>
            </div>
            <div class="icon">
            <i class="fas fa-book-reader"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{\App\Models\subject::count()}}</h3>

              <p>Subjects</p>
            </div>
            <div class="icon">
            <i class="fas fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{\App\Models\exam::count()}}</h3>

              <p>Exams</p>
            </div>
            <div class="icon">
              <i class="fas fa-question"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{\App\Models\examquestion::count()}}</h3>

              <p>Exam Questions</p>
            </div>
            <div class="icon">
              <i class="ion fas fa-pencil-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    <!-- </div>
</div> -->
@endsection
