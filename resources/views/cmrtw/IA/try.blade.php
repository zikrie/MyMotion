@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("PERKESO_UI/assets/node_modules/calendar/dist/fullcalendar.css")}}" rel="stylesheet" />

@endsection

<div class="card-body">
            <h4 class="card-title">@lang('offerconfirmation.title')</h4>
            <form class="form">
                <div class="form-group mt-5 row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.resource')</label>
                    </div>
                    <div class="col-8">
                        <select class="form-control select" id="bankloc" name='bankloc' onchange="offerConfirm(this.options[this.selectedIndex].value)" required>
                            <option value="">Please Select</option>
                            <option value="Letter">@lang('offerconfirmation.attr.letter')</option>
                            <option value="Email">@lang('offerconfirmation.attr.email')</option>
                            <option value="Telephone">@lang('offerconfirmation.attr.telephone')</option>
                        </select>
                    </div>
                </div>
        <div id="letterHide" class="form-group" style="display:none">
            <!-- letter -->
            <div id="Letter">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.letterdate')</label>
                    </div>
                    <div class="col-8">
                        <input class="form-control selectLetter" type="date"  id="letterdate">
                    </div>
                </div>
            </div>
        </div>
        <div id="emailHide" class="form-group" style="display:none">
            <!-- email -->
            <div id="Email">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.emaildate')</label>
                    </div>
                    <div class="col-8">
                        <input class="form-control selectEmail" type="date"  id="emaildate">
                    </div>
                </div>
            </div>
        </div>
        <div id="callHide" class="form-group" style="display:none">
            <!-- call -->
            <div id="Call">
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbyob')</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.date')</label>
                            <input type="date" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.time')</label>
                            <input type="time" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label"></label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.personincharged')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.cmname')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbycm')</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.date')</label>
                            <input type="date" class="form-control selectCall"  >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.time')</label>
                            <input type="time" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label"></label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('offerconfirmation.attr.obname')</label>
                            <input type="text" class="form-control selectCall"  >
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="form-group row">
                    <div class="col-2">
                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.detailconfirmation')</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                          <select class="form-control select" id="result" name='result'
                          onchange="myFunction(this.options[this.selectedIndex].value)" required>
                            <option value="">@lang('offerconfirmation.attr.result')</option>
                            <option value="Yes">@lang('offerconfirmation.attr.yes')</option>
                            <option value="No">@lang('offerconfirmation.attr.no')</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        <div id="hideResult" class="form-group" style="display:none">
            <div class="form-group row">
                <div class="col-2">
                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.reasons')</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" rows="5" type="textarea"  id="reasons"></textarea>
                </div>
            </div>
        </div>
            <div class="form-actions">
                
               {{--  <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('offerconfirmation.attr.reset')</button> --}}
                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                @lang('offerconfirmation.attr.submit')</button>
            </div>  
        </form>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    
    function offerConfirm(aval) {
        if (aval == "Letter") {
            $('#letterHide').show();
            $('#emailHide').hide();
            $('#callHide').hide();
            
        } 
        else if (aval == "Email"){
            $('#emailHide').show();
            $('#letterHide').hide();
            $('#callHide').hide();
        }
        else if (aval == "Telephone"){
            $('#callHide').show();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
        else {
            $('#callHide').hide();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
    }
    function myFunction(aval) {
        if (aval == "No") {
            $('#hideResult').show();   
        }
        else {
            $('#hideResult').hide(); 
        }
    }
</script>