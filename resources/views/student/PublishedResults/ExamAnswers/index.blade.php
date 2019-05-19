@extends('student/layout.master')


@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Published Results</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Results
                         </div>
                         <div class="card-body">
                             @include('student.PublishedResults.ExamAnswers.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

