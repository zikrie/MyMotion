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
            <h4 class="card-title">RTW Insured Person Info</h4>

            <ul class="nav nav-tabs" role="tablist" >
               <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#registerrtw" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insured Person Details</span></a> </li>
               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ia" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Initial Assessment</span></a> </li>
           </ul>
           <!-- Nav tabs -->
                 <div class="tab-content tabcontent-border">
                    <div class="tab-pane p-20 active" id="registerrtw" role="tabpanel">
                        @include('cmrtw.rtwcase')

                         {{--     <ul class="nav customtab" role="tablist">
                    
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#registrationrtw" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.registration_application')</span></a> </li>
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdocument" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                  
                             </ul> --}}
{{-- 
                            <div class="tab-content tabcontent-border"> --}}
                                 <!-- RegistrationRTW details tab -->
                                {{--  <div class="tab-pane p-20 active" id="registrationrtw" role="tabpanel">
                                   
                                </div> --}}

                               <!-- supporting details tab -->
                               {{-- <div class="tab-pane p-20" id="supportingdocument" role="tabpanel">
                                   @include('PK.supportingDoc')
                               </div> --}}
                          {{--  </div> --}}
                    </div>     
                    <div class="tab-pane p-20" id="ia" role="tabpanel">

                        <ul class="nav customtab" role="tablist" id="calendarTab">

                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#offerconfirmation" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Offer Confirmation</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Appointment</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#iarecovery" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Initial Assessment</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recoveryplannning" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Recovery Planning</span></a> </li>


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

              {{--              <div class="tab-pane p-20 " id="initialevaluation" role="tabpanel">
                                <ul class="nav nav-tabs customtab2" role="tablist">

                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#iarecovery" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Initial Assessment Recovery</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supdoc" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>

                                </ul>
                                <div class="tab-content tabcontent-border">

                               <!-- RegistrationRTW details tab -->
                                     <div class="tab-pane p-20 active" id="iarecovery" role="tabpanel">
                                          @include('cmrtw.IA.initialevaluation')
                                    </div>

                               <!-- supporting details tab -->
                                    <div class="tab-pane p-20" id="supdoc" role="tabpanel">
                                      @include('cmrtw.IA.appointment')
                                    </div>
                                 </div>
                            </div> --}}

                             <div class="tab-pane p-20 " id="recoveryplannning" role="tabpanel">
                              {{--  @include('cmrtw.IA.recoveryplanning') --}}
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

</script>
@endsection

