<div class="card">
    <div class="card-body">
        <form class="form">
            <h4 class="card-title">@lang('offerconfirmation.title')</h4>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('offerconfirmation.attr.resource')</label>
                            <select class="form-control select" id="bankloc" name='bankloc' onchange="offerConfirm(this.options[this.selectedIndex].value)" required>
                                <option value="">Please Select</option>
                                <option value="Letter">@lang('offerconfirmation.attr.letter')</option>
                                <option value="Email">@lang('offerconfirmation.attr.email')</option>
                                {{--  <option value="Telephone">@lang('offerconfirmation.attr.telephone')</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <!-- letter -->
                            <div id="letterHide" class="form-group " style="display:none">
                                <label class="control-label">@lang('offerconfirmation.attr.letterdate')</label>
                                <input class="form-control selectLetter clearFields" type="date"  id="letterdate">
                            </div>
                             <!-- email -->
                            <div id="emailHide" class="form-group" style="display:none">
                                <label class="control-label">@lang('offerconfirmation.attr.emaildate')</label>
                                <input class="form-control selectEmail clearFields" type="date"  id="emaildate">
                            </div>
                        </div>
                    </div>
                   
                </div>
   
                <h5 class="card-title">@lang('offerconfirmation.title1')</h5>
                
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('offerconfirmation.attr.detailconfirmation')</label>
                            <select class="form-control select " id="result" name='result' onchange="myFunction(this.options[this.selectedIndex].value)" required>
                                <option value="">@lang('offerconfirmation.attr.result')</option>
                                <option value="Yes">@lang('offerconfirmation.attr.yes')</option>
                                <option value="No">@lang('offerconfirmation.attr.no')</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div id="hideResult" class="form-group" style="display:none">
                                <label class="control-label">@lang('offerconfirmation.attr.reasons')</label>
                                <textarea class="form-control clearFields" rows="5" type="textarea"  id="reasons"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- call -->
                    <!-- <div id="callHide" class="form-group" style="display:none"> 
                        <div id="Call"> 
                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbyob')</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('offerconfirmation.attr.date')</label>
                                        <input type="date" class="form-control selectCall clearFields"  >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('offerconfirmation.attr.time')</label>
                                        <input type="time" class="form-control selectCall clearFields"  >
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
                                        <input type="text" class="form-control selectCall clearFields"  >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('offerconfirmation.attr.cmname')</label>
                                        <input type="text" class="form-control selectCall clearFields"  >
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
                                        <input type="date" class="form-control selectCall clearFields"  >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('offerconfirmation.attr.time')</label>
                                        <input type="time" class="form-control selectCall clearFields"  >
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
                                        <input type="text" class="form-control selectCall clearFields"  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">
                            SAVE & NEXT</button>
                            <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                            <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                        </div>
                </form>
            </div>
        </div>
<script type="text/javascript">
    
    function offerConfirm(aval) {
        if (aval == "Letter") {
            $('#letterHide').show();
            $('#emailHide').hide();
            
        } 
        else if (aval == "Email"){
            $('#emailHide').show();
            $('#letterHide').hide();
        }
        else {
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
    }
      function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>