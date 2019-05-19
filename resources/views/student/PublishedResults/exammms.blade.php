@extends('student/layout.master')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Exams</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Exams
                         </div>
                         <div class="card-body">
                             @include('Student.PublishedResults.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

