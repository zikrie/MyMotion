<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-body">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.diagnosis') <span class="text-danger">*</span></label>
                                    <input type="text" id="diagnosis" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.type_diagnosis') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" required>
                                            <option value="">Please Select</option>
                                            <option value="injury">@lang('caseMgmt.attr.injury')</option>
                                            <option value="illness">@lang('caseMgmt.attr.illness')</option> 
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.location_desc') <span class="text-danger">*</span></label>
                                    <input type="text" id="location_desc" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.icd_10') <span class="text-danger">*</span></label>
                                    <input type="text" id="icd_10" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-2">
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.pwds_card') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="pwds_cardyes" name="pwds_card" class="custom-control-input" required>
                                            <label class="custom-control-label" for="pwds_cardyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pwds_cardno" name="pwds_card" class="custom-control-input" required>
                                            <label class="custom-control-label" for="pwds_cardno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.pwds_category') <span class="text-danger">*</span></label>
                                        <select class="form-control" onchange="diseaseSpec(this.options[this.selectedIndex].value)" required>
                                            <optgroup class="form-control" label="">
                                                <option value="">Please Select</option>
                                                <option value="hearing">@lang('caseMgmt.attr.hearing')</option>
                                                <option value="vision">@lang('caseMgmt.attr.vision')</option>
                                                <option value="speech">@lang('caseMgmt.attr.speech')</option>
                                                <option value="physical">@lang('caseMgmt.attr.physical')</option>
                                                <option value="learning">@lang('caseMgmt.attr.learning')</option>
                                                <option value="mental">@lang('caseMgmt.attr.mental')</option>
                                                <option value="diseaseOther">@lang('caseMgmt.attr.disabledOther')</option>
                                            </optgroup>   
                                        </select>
                               
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div id="hideSpecifyD" class="form-group" style="display:none">
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger">*</span></label>
                                    <input type="text" id="disabledSpecify" class="form-control">
                                </div>
                            </div>
                        </div>
                         <div class="row p-t-20">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.current_healthy') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="acute" name="current_healthy" class="custom-control-input"  onclick="rehab_acute()" value="acute" required>
                                            <label class="custom-control-label" for="acute">@lang('caseMgmt.attr.acute')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="onRehab" name="current_healthy" class="custom-control-input" onclick="rehab_onRehab()" value="onRehab" required>
                                            <label class="custom-control-label" for="onRehab">@lang('caseMgmt.attr.on_rehab')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ready_work" name="current_healthy" class="custom-control-input" onclick="rehab_ready_work()" value="ready_work" required>
                                            <label class="custom-control-label" for="ready_work">@lang('caseMgmt.attr.ready_work')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="notfittoWork" name="current_healthy" class=" custom-control-input" value="notfittoWork" onclick="rehab_notfittoWork()" required>
                                            <label class="custom-control-label" for="notfittoWork">@lang('caseMgmt.attr.notfittoWork')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">     
                                <div id="onrehab" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.health_ques') <span class="text-danger">*</span></label>
                                        <select class="form-control" id="onRehabOptions" required>
                                            <option value="">Please Select</option>
                                            <option value="rtw">@lang('caseMgmt.attr.ready_work')</option>
                                            <option value="noRtw">@lang('caseMgmt.attr.not_ready_work')</option>
                                        </select>
                                    </div>
                                </div>
                         </div>
                         <div class="row p-t-20">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.sexual_capability') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="sexual_capabilitynormal" name="sexual_capability" class="custom-control-input"   value="acute" required>
                                            <label class="custom-control-label" for="sexual_capabilitynormal">@lang('caseMgmt.attr.normal')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="sexual_capabilityno" name="sexual_capability" class="custom-control-input"  value="onRehab" required>
                                            <label class="custom-control-label" for="sexual_capabilityno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
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

    function rehab_onRehab() {
$('#onrehab').show();  
    }
    function rehab_notfittoWork(){
$('#onrehab').hide();
    }
     function rehab_ready_work(){
$('#onrehab').hide();
    }
     function rehab_acute(){
$('#onrehab').hide();
    }
    function hiderehab() {
       
        $('#hiderehab').show();
     
    }
</script>



