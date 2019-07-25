<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">

                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.disabled_card')</label>
                                    <select class="form-control" onchange="DCCate(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hideCate" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.disabled_category')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="">Please Select</option>
                                            <option value="hearing">@lang('caseMgmt.attr.hearing')</option>
                                            <option value="vision">@lang('caseMgmt.attr.vision')</option>
                                            <option value="speech">@lang('caseMgmt.attr.speech')</option>
                                            <option value="physical">@lang('caseMgmt.attr.physical')</option>
                                            <option value="learning">@lang('caseMgmt.attr.learning')</option>
                                            <option value="mental">@lang('caseMgmt.attr.mental')</option>
                                            <option value="others_option">@lang('caseMgmt.attr.others_option')</option>   
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">   
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.disabled_card')</label>
                                    <select class="form-control" onchange="DCYesNo(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="DCyes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="DCno">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hideInjury" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.injury')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="">Please Select</option>
                                            <option value="head">@lang('caseMgmt.attr.head')</option>
                                            <option value="neck">@lang('caseMgmt.attr.neck')</option>
                                            <option value="trunk">@lang('caseMgmt.attr.trunk')</option>
                                            <option value="upper_limb">@lang('caseMgmt.attr.upper_limb')</option>
                                            <option value="lower_limb">@lang('caseMgmt.attr.lower_limb')</option>
                                            <option value="multiple_location">@lang('caseMgmt.attr.multiple_location')</option>
                                            <option value="psychology">@lang('caseMgmt.attr.psychology')</option>
                                            <option value="general_injuries">@lang('caseMgmt.attr.general_injuries')</option>
                                            <option value="unspecified_location">@lang('caseMgmt.attr.unspecified_location')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.diagnosis')</label>
                                    <input type="text" id="diagnosis" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.icd_10')</label>
                                    <input type="text" id="icd_10" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.injury_date')</label>
                                    <input type="date" id="injury_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('//caseMgmt.attr.disease')</label>
                                <select class="form-control" tabindex="1">
                                        <option value="">Please Select</option>
                                        <option value="head">@lang('caseMgmt.attr.head')</option>
                                        <option value="neck">@lang('caseMgmt.attr.neck')</option>
                                        <option value="trunk">@lang('caseMgmt.attr.trunk')</option>
                                        <option value="upper_limb">@lang('caseMgmt.attr.upper_limb')</option>
                                        <option value="lower_limb">@lang('caseMgmt.attr.lower_limb')</option>
                                        <option value="multiple_location">@lang('caseMgmt.attr.multiple_location')</option>
                                        <option value="psychology">@lang('caseMgmt.attr.psychology')</option>
                                        <option value="general_injuries">@lang('caseMgmt.attr.general_injuries')</option>
                                        <option value="unspecified_location">@lang('caseMgmt.attr.unspecified_location')</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.current_healthy')</label>
                                    <select class="form-control" tabindex="1">
                                        <option value="">Please Select</option>
                                        <option value="acute">@lang('caseMgmt.attr.acute')</option>
                                        <option value="on_rehab">@lang('caseMgmt.attr.on_rehab')</option>
                                        <option value="ready_work">@lang('caseMgmt.attr.ready_work')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.sexual_capability')</label>
                                    <select class="form-control" id="sexual_capability" required>
                                        <option value="">Please Select</option>
                                        <option value="normal">@lang('caseMgmt.attr.normal')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function DCYesNo(aval) {
        if (aval == "DCyes") {
            $('#hideInjury').show();
        }
        else {
            $('#hideInjury').hide();
        }
    }
    function DCCate(aval) {
        if (aval == "yes") {
            $('#hideCate').show();
        }
        else {
            $('#hideCate').hide();
        }
    }
</script>



