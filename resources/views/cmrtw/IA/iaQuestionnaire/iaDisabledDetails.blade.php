<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-body">

                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.disabled_card') <span class="text-danger">*</span></label>
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
                                        <label class="control-label">@lang('caseMgmt.attr.disabled_category') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" required>
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
                                    <label class="control-label">@lang('caseMgmt.attr.injury_ques') <span class="text-danger">*</span></label>
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
                                        <label class="control-label">@lang('caseMgmt.attr.injury') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" required>
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
                                    <label class="control-label">@lang('caseMgmt.attr.diagnosis') <span class="text-danger">*</span></label>
                                    <input type="text" id="diagnosis" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.icd_10') <span class="text-danger">*</span></label>
                                    <input type="text" id="icd_10" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.injury_date') <span class="text-danger">*</span></label>
                                    <div class="input-group" required>
                                        <input type="date" id="injury_date" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button" onclick="addDisabled();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="addDis"></div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.disease_ques') <span class="text-danger">*</span></label>
                                    <select class="form-control" onchange="diseaseFunc(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="diseaseYes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="diseaseNo">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div id="hideDisease" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.disease') <span class="text-danger">*</span></label>
                                        <select class="select2 m-b-10 select2-multiple" style="width: 100%;" multiple="multiple" onchange="diseaseSpec(this.options[this.selectedIndex].value)" required>
                                            <optgroup class="form-control" label="">
                                                <option value="">Please Select</option>
                                                <option value="stroke">@lang('caseMgmt.attr.stroke')</option>
                                                <option value="cancer">@lang('caseMgmt.attr.cancer')</option>
                                                <option value="hypertension">@lang('caseMgmt.attr.hypetension')</option>
                                                <option value="diabetes">@lang('caseMgmt.attr.diabetes')</option>
                                                <option value="esrf">@lang('caseMgmt.attr.esrf')</option>
                                                <option value="psychiatric">@lang('caseMgmt.attr.psychiatric')</option>
                                                <option value="vision_impairment">@lang('caseMgmt.attr.vision')</option>
                                                <option value="hearing_impairment">@lang('caseMgmt.attr.hearing')</option>
                                                <option value="sle">@lang('caseMgmt.attr.sle')</option>
                                                <option value="diseaseOther">@lang('caseMgmt.attr.disabledOther')</option>
                                            </optgroup>   
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="hideSpecifyD" class="form-group" style="display:none">
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger">*</span></label>
                                    <input type="text" id="disabledSpecify" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.current_healthy') <span class="text-danger">*</span></label>
                                    <select class="form-control" tabindex="1" onchange="onRehabFunc(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="acute">@lang('caseMgmt.attr.acute')</option>
                                        <option value="on_rehab">@lang('caseMgmt.attr.on_rehab')</option>
                                        <option value="ready_work">@lang('caseMgmt.attr.ready_work')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <div id="hideRehab" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.health_ques') <span class="text-danger">*</span></label>
                                        <select class="form-control" id="onRehabOptions" required>
                                            <option value="">Please Select</option>
                                            <option value="rtw">@lang('caseMgmt.attr.ready_work')</option>
                                            <option value="noRtw">@lang('caseMgmt.attr.not_ready_work')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.sexual_capability') <span class="text-danger">*</span></label>
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
    function diseaseFunc(aval) {
        if (aval == "diseaseYes") {
            $('#hideDisease').show();
        }
        else {
            $('#hideDisease').hide();
        }
    }
    function diseaseSpec(aval) {
        if (aval == "diseaseOther") {
            $('#hideSpecifyD').show();
        }
        else if (aval == "diseaseOther" && ( aval == "vision" || aval == "esrf" || aval == "diabetes" || aval == "hearing" || aval == "sle" || aval == "stroke" || aval == "cancer" || aval == "hypetension" || aval == "psychiatric" ) ){
            $('#hideSpecifyD').show();
        }
        else {
            $('#hideSpecifyD').hide();
        }
    }
    function onRehabFunc(aval) {
        if (aval == "on_rehab") {
            $('#hideRehab').show();
        }
        else {
            $('#hideRehab').hide();
        }
    }
</script>



