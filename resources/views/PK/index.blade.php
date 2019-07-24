@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="card-body">
                <h4 class="card-title">@lang('index.attr.rtw_registration')</h4>
                @include('PK.RegistrationRTW')


                <!-- Nav tabs -->
                {{-- < --}}{{-- ul class="nav customtab" role="tablist">
              
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#register" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.registration_application')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                  
                </ul>

                <div class="tab-content tabcontent-border" --}}>

                    <!-- Registration RTW -->
                    {{-- <div class="tab-pane p-20 active" id="register" role="tabpanel">
                      @include('PK.RegistrationRTW')
                    </div> --}}

                    <!-- accident details tab -->
                   

               
                </div>
            </div>
    </div>
</div>

<!-- row -->
@endsection
