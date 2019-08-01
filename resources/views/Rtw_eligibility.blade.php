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
                <form action="/idnortw" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">@lang('rtw_eligibility.title')</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                             @if(Session::get('messageid')) 
                             <div class="card-footer">

                                <div class="alert alert-warning">
                                    {{Session::get('messageid')}} 
                                </div>

                            </div>

                            @endif
                            @lang('noticetype.details')<br /><br />
                            <div class="form-group">

                                <label class="control-label">@lang('noticetype.attr.id_type')</label>

                                <select required class="form-control clearFields" name='idtype' id='idtype'>
                                    <span class="text-danger">*</span>
                                       {{--  @foreach ($idtype as $id)
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endforeach --}}
                                        <option value="">Please Select </option>
                                        <option value="newic">@lang('rtw_eligibility.attr.new_ic')</option>
                                        <option value="ssn">@lang('rtw_eligibility.attr.ssn_id')</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('rtw_eligibility.attr.enter_ic')</label>
                                    <input type="text" name="idno" id="idno" class="form-control clearFields" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" maxlength="12">{{-- {{Session::get('idno')}} --}}
                                    <label class="" >{{Session::get('error')}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-actions">
                       <button type="submit" class="btn waves-effect waves-light btn-success" id='btnsubmitacc' >@lang('rtw_eligibility.next')</button>
                       <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('rtw_eligibility.reset')</button>
                       <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
