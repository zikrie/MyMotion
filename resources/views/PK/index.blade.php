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
            
            <ul class="nav customtab" role="tablist" id="tabMenu">

                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span><span class="hidden-xs-down"> @lang('index.attr.insured_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> @lang('index.attr.employer_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supdoc" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down"> @lang('index.attr.supporting_document')</span></a> </li>
            </ul>
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                    @include('PK.RegistrationRTW')
                </div>

                <div class="tab-pane p-20" id="employer" role="tabpanel">
                    @include('PK.employerinfo')
                </div>
                <div class="tab-pane p-20" id="supdoc" role="tabpanel">
                    @include('PK.supportingDoc')
                </div>

            </div>
        </div>
    </div>
</div>
@endsection