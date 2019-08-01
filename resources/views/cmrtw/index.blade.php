@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("PERKESO_UI/assets/node_modules/calendar/dist/fullcalendar.css")}}" rel="stylesheet" />

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-left " style="float:right;width:500px;" >
                            <div class="card-body" style="background-color: #98cb5b;">
                                <table >
                                    <thead>
                                    <tr>
                                        <th><label>Name</label></th>         
                                        <th>:</th>
                                        <th>@if(!empty($casertw)){{ $casertw->name }} @endif</th>
                                    </tr>
                                    <tr>
                                        <th><label>ID No</label></th>
                                        <th>:</th>
                                        <th>@if(!empty($casertw)){{ $casertw->idno }} @endif</th>
                                    </tr>
                                    <tr>
                                        <th><label>RTW Ref No</label></th>
                                        <th>:</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th><label>Receive Date/Submission Date</label></th>
                                        <th>:</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th><label>Source From</label></th>
                                        <th>:</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <h4 class="card-title">Return To Work</h4>
            <!-- <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body">
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('registrationRtw.attr.name')</label>
                                <input type="text" id="name" class="form-control" value="@if(!empty($casertw)){{ $casertw->name }} @endif" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="example-text-input" class="control-label">@lang('offerconfirmation.attr.ictype')</label>
                                <select class="form-control" value="@if(!empty($casertw)){{ $casertw->idtype }} @endif" disabled>
                                    <option>Please Select</option>
                                        @foreach($idtype as $id)
                                        @if (!empty($casertw) && $id->refcode == $casertw->idtype)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>

                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="example-text-input" class="control-label">@lang('offerconfirmation.attr.idno')</label>
                                <input class="form-control" type="text"  id="idno" value="@if(!empty($casertw)){{ $casertw->idno }} @endif" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="example-text-input" class="control-label">@lang('home.rtwrefno')</label>
                                <input class="form-control" type="text"  id="idno" value="" readonly>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            </div> -->


            <ul class="nav nav-tabs" role="tablist" >
               <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#registerrtw" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.registration_application')</span></a> </li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ia" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Initial Assessment</span></a></li>
           </ul>
           <!-- Nav tabs -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane p-20 active" id="registerrtw" role="tabpanel">
                        <ul class="nav customtab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#registrationrtw" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insured Person Info</span></a></li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employerinfo" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Employer Info</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdocument" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitCM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Benefit Claim Info</span></a> </li>
                        </ul>

                            <div class="tab-content tabcontent-border">
                                 <!-- RegistrationRTW details tab -->
                                 <div class="tab-pane p-20 active" id="registrationrtw" role="tabpanel">
                                   @include('cmrtw.rtwcase')
                                </div>

                                <div class="tab-pane p-20" id="employerinfo" role="tabpanel">
                                   @include('cmrtw.employerinfo')
                               </div>
                               <!-- supporting details tab -->
                               <div class="tab-pane p-20" id="supportingdocument" role="tabpanel">
                                   @include('cmrtw.uploaddoc')
                               </div>
                               <div class="tab-pane p-20" id="benefitCM" role="tabpanel">
                                    @include('cmrtw.obForm')
                                </div>
                           </div> 
                    </div>
                    <div class="tab-pane p-20" id="ia" role="tabpanel">
                        @include('cmrtw.IA.try')          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- row -->
@endsection

@section('script')

<script>
    $(document).ready(function () {
        $('#calendarTab').on('shown.bs.tab', function (e) {
            $('#calendar').fullCalendar('render');
        });
    });

</script>
@endsection

