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
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipDetails" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Case Management</span></a></li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact_act" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Contact Activity</span></a></li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#generalRemarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Remarks</span></a></li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseclosure" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Case Closure</span></a></li>
           </ul>

           

           <!-- Nav tabs -->
                <div class="tab-content tabcontent-border">
                    
                    
                    <div class="tab-pane p-20 active" id="registerrtw" role="tabpanel">
                             <ul class="nav customtab" role="tablist">
                    
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#registrationrtw" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Application Info</span></a></li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdocument" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitCM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Benefit Claim Info</span></a> </li>
                  
                             </ul>

                            <div class="tab-content tabcontent-border">
                                 <!-- RegistrationRTW details tab -->
                                 <div class="tab-pane p-20 active" id="registrationrtw" role="tabpanel">
                                   @include('cmrtw.rtwcase')
                                   
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
                        <ul class="nav customtab" role="tablist" id="calendarTab">

                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#offerconfirmation" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Offer Confirmation</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Appointment</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#iarecovery" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Initial Assessment</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehabplan" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Rehab Plan</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supDoc" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Supporting Document</span></a> </li>
                        </ul>

                        <div class="tab-content tabcontent-border">

                            <!-- RegistrationRTW details tab -->
                            <div class="tab-pane p-20 active" id="offerconfirmation" role="tabpanel">
                                @include('cmrtw.IA.offerconfirmation')
                            </div>

                            <!-- supporting details tab -->
                            <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                @include('cmrtw.IA.appointment')
                            </div>

                            <div class="tab-pane p-20 " id="iarecovery" role="tabpanel">
                                @include('cmrtw.IA.initialevaluation')
                            </div>
                            <div class="tab-pane p-20 " id="rehabplan" role="tabpanel">
                                @include('cmrtw.IA.rehabplan')
                            </div>
                            <div class="tab-pane p-20" id="supDoc" role="tabpanel">
                                   @include('cmrtw.IA.supDoc')
                               </div>
                        </div>       
                    </div>

                    {{-- Case Management Tab --}}
                    <div class="tab-pane p-20" id="ipDetails" role="tabpanel">
                        <ul class="nav customtab" role="tablist">

                     <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#plan_list" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.planlist')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gl" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.gl')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehab_al" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.rehab_al')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_note" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_note')</span></a> </li>
                     
                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_status" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_status')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                        </ul>

                        <div class="tab-content tabcontent-border">

                    <div class="tab-pane p-20 active" id="plan_list" role="tabpanel">
                      @include('cmrtw.caseMgmt.planList')
                    </div>

                     <div class="tab-pane p-20" id="gl" role="tabpanel">
                      @include('cmrtw.caseMgmt.GL.glList')
                    </div>

                    <div class="tab-pane p-20" id="rehab_al" role="tabpanel">
                      @include('cmrtw.caseMgmt.RA.rehabAllowanceList')
                    </div>

                    <div class="tab-pane p-20" id="case_note" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseNote')
                    </div>

                    <div class="tab-pane p-20" id="case_status" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseStatus')
                    </div>

                    <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                        @include('cmrtw.caseMgmt.supportDoc')
                    </div>


               
                </div>       
                    </div>

                    <div class="tab-pane p-20" id="contact_act" role="tabpanel">
                            
                        <div class="tab-content tabcontent-border">
                          <!-- insured details tab -->
                          <div class="tab-pane p-20 active" id="contact_act" role="tabpanel">
                            @include('cmrtw.contact_activity')
                          </div>

                        </div>
                    </div>

                    <div class="tab-pane p-20" id="generalRemarks" role="tabpanel">
                            
                        <div class="tab-content tabcontent-border">
                          <!-- insured details tab -->
                          <div class="tab-pane p-20 active" id="generalRemarks" role="tabpanel">
                            @include('cmrtw.cmrtwRemarks')
                          </div>

                        </div>
                    </div>
                    
                    <div class="tab-pane p-20 active" id="caseclosure" role="tabpanel">
                             <ul class="nav customtab" role="tablist">
                    
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insuredpersoninfo" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insured Person Information</span></a></li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#defaultedrejected" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Defaulted/Rejected Case Closure Information</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitCM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Rtw Case Closure Information</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitCM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Vass/Dass21 Appraisal Information</span></a> </li>
                  
                  
                             </ul>

                            <div class="tab-content tabcontent-border">
                                 <!-- Insured Person Information tab -->
                                 <div class="tab-pane p-20 active" id="insuredpersoninfo" role="tabpanel">
                                   @include('cmrtw.caseclosure.insuredpersoninfo')
                                </div>
                               <!-- supporting details tab -->
                               <div class="tab-pane p-20" id="defaultedrejected" role="tabpanel">
                                   @include('cmrtw.caseclosure.defaultedrejected')
                               </div>
                               <div class="tab-pane p-20" id="benefitCM" role="tabpanel">
                                    @include('cmrtw.obForm')
                                </div>
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


    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>
@endsection

