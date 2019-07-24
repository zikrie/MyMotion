@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/testwebapp" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.name')</label>
                                    <input type="text" name="name" id="name" value="@if(!empty($data)){{ $data->name }} @endif" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.postal_address1')</label>
                                    <input type="text" name="add1" id="add1" value="@if(!empty($data)){{ $data->add1 }} @endif" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.postal_address2')</label>
                                    <input type="text" name="add2" id="add2" value="@if(!empty($data)){{ $data->add2 }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.postcode')</label>
                                    <input type="text" name="postcode" id="postcode" value="@if(!empty($data)){{ $data->postcode }} @endif" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.city')</label>
                                    <input type="text" name="city" id="city" value="@if(!empty($data)){{ $data->city }} @endif" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.state')</label>
                                    <input type="text" name="statecode" id="statecode" value="@if(!empty($data)){{ $data->statecode }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.telNo')</label>
                                    <input type="text" name="telno" id="telno" value="@if(!empty($data)){{ $data->telno }} @endif" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.mobileNo')</label>
                                    <input type="text" name="mobileno" id="mobileno" value="@if(!empty($data)){{ $data->mobileno }} @endif" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.email')</label>
                                    <input type="text" name="email" id="email" value="@if(!empty($data)){{ $data->email }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
 
    </form>
</div>
</div>
</div>
</div>
@endsection

