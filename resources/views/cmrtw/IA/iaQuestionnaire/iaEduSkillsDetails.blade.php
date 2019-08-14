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
                                    <label class="control-label">@lang('caseMgmt.attr.highest_edu') <span class="text-danger"> *</span></label>
                                    <select name="select_opt" id="select_opt" class="form-control" onchange="showfield1(this.options[this.selectedIndex].value)" required> 
                                        <option value="">Please Select</option>
                                        <option value="no_formaledu">@lang('caseMgmt.attr.no_formaledu')</option>
                                        <option value="upsr">@lang('caseMgmt.attr.upsr')</option>
                                        <option value="pmr">@lang('caseMgmt.attr.pmr')</option>
                                        <option value="spm">@lang('caseMgmt.attr.spm')</option>
                                        <option value="certificate">@lang('caseMgmt.attr.certificate')</option>
                                        <option value="dip_stpm">@lang('caseMgmt.attr.dip_stpm')</option>
                                        <option value="degree">@lang('caseMgmt.attr.degree')</option>
                                        <option value="Other">@lang('caseMgmt.attr.others_option')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.pro_qualification') <span class="text-danger"> *</span></label>
                                    <select class="form-control"  onchange="showfield3(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group" id="divspecify1" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger"> *</span></label>
                                    <input type="text" id="specifyHighEdu" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="divspecify3" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger"> *</span></label>
                                    <input type="text" id="specifyProQ" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
<!-- license vocational -->
                        <h5><strong>@lang('caseMgmt.attr.license_vocational')</strong><span class="text-danger"> *</span></h5>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.gdl_license')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="gdl">
                                        <label class="custom-control-label" for="gdl"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.psv_license')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="psv">
                                        <label class="custom-control-label" for="psv"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.conductor_license')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="conductor">
                                        <label class="custom-control-label" for="conductor"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.none')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="none">
                                        <label class="custom-control-label" for="none"></label>
                                    </div>
                                </div>
                            </div>
                        <hr>
<!-- language -->
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <h5><strong>@lang('caseMgmt.attr.language_proficiency')</strong><span class="text-danger">*</span></h5>
                            </div>
                        </div>

<!-- oral -->
<div class="row p-t-20">
<div class="col-md-6">
                        <label class="control-label"><u>@lang('caseMgmt.attr.oral')<span class="text-danger"> *</span></u></label>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.bm')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="malayOral">
                                    <label class="custom-control-label" for="malayOral"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.eng')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="engOral">
                                    <label class="custom-control-label" for="engOral"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.tamil')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tamilOral">
                                    <label class="custom-control-label" for="tamilOral"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.others')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="othersOral">
                                    <label class="custom-control-label" for="othersOral"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <input type="text" id="otherLangOral" class="form-control">
                            </div>
                        </div>
</div>
<!-- writing -->
<div class="col-md-6">
                        <label class="control-label"><u>@lang('caseMgmt.attr.writing') <span class="text-danger">*</span></u></label>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.bm')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="malayWriting">
                                    <label class="custom-control-label" for="malayWriting"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.eng')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="engWriting">
                                    <label class="custom-control-label" for="engWriting"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.tamil')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tamilWriting">
                                    <label class="custom-control-label" for="tamilWriting"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <label class="control-label">@lang('caseMgmt.attr.others')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="othersWriting">
                                    <label class="custom-control-label" for="othersWriting"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <input type="text" id="otherLang" class="form-control">
                            </div>
                        </div>
</div>
</div>
<!-- reading -->
                        <label class="control-label"><u>@lang('caseMgmt.attr.reading') <span class="text-danger">*</span></u></label>
                        <div class="row p-t-20">
                            <div class="col-md-2">
                                <label class="control-label">@lang('caseMgmt.attr.bm')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="malayReading">
                                    <label class="custom-control-label" for="malayReading"></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-2">
                                <label class="control-label">@lang('caseMgmt.attr.eng')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="engReading">
                                    <label class="custom-control-label" for="engReading"></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-2">
                                <label class="control-label">@lang('caseMgmt.attr.tamil')</label>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tamilReading">
                                    <label class="custom-control-label" for="tamilReading"></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-2">
                                <label class="control-label">@lang('caseMgmt.attr.others')</label>
                                <input type="text" id="otherLang" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="othersReading">
                                    <label class="custom-control-label" for="othersReading"></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="good">@lang('caseMgmt.attr.good')</option>
                                    <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                    <option value="low">@lang('caseMgmt.attr.weak')</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-t-20">   
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.add_skills')</label>
                                    <input type="text" id="add_skills" class="form-control" required>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.grade')</label>
                                    <div class="input-group">
                                        <select class="form-control" tabindex="1" required>
                                            <option value="">Please Select</option>
                                            <option value="good">@lang('caseMgmt.attr.good')</option>
                                            <option value="intermediate">@lang('caseMgmt.attr.moderate')</option>
                                            <option value="low">@lang('caseMgmt.attr.weak')</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button" onclick="add_newskills();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="add_newskill"></div>
                        <hr>

                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('ia.attr.license') <span class="text-danger">*</span></label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%;border:1px" multiple="multiple" data-placeholder="Please Select" required>
                                        <optgroup class="form-control" label="">
                                            <option value="ldl">@lang('ia.attr.ldl')</option>
                                            <option value="pdl">@lang('ia.attr.pdl')</option>
                                            <option value="cdl">@lang('ia.attr.cdl')</option>
                                            <option value="vdl">@lang('ia.attr.vdl')</option>
                                            <option value="idp">@lang('ia.attr.idp')</option>
                                            <option value="nolicense">@lang('ia.attr.nolicense')</option>
                                        </optgroup>   
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.grade')</label>
                                    <div class="input-group">
                                        <select class="form-control" tabindex="1" required>
                                            <option value="a_type">@lang('caseMgmt.attr.a_type')</option>
                                            <option value="a1_type">@lang('caseMgmt.attr.a1_type')</option>
                                            <option value="b_type">@lang('caseMgmt.attr.b_type')</option>
                                            <option value="b1_type">@lang('caseMgmt.attr.b1_type')</option>
                                            <option value="b2_type">@lang('caseMgmt.attr.b2_type')</option>
                                            <option value="c_type">@lang('caseMgmt.attr.c_type')</option>
                                            <option value="d_type">@lang('caseMgmt.attr.d_type')</option>
                                            <option value="da_type">@lang('caseMgmt.attr.da_type')</option>
                                            <option value="e_type">@lang('caseMgmt.attr.e_type')</option>
                                            <option value="e1_type">@lang('caseMgmt.attr.e1_type')</option>
                                            <option value="e2_type">@lang('caseMgmt.attr.e2_type')</option>
                                            <option value="f_type">@lang('caseMgmt.attr.f_type')</option>
                                            <option value="g_type">@lang('caseMgmt.attr.g_type')</option>
                                            <option value="h_type">@lang('caseMgmt.attr.h_type')</option>
                                            <option value="i_type">@lang('caseMgmt.attr.i_type')</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button" onclick="add_newskills();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-10">
                                <div class="form-group row">
                                    <label class="control-label">@lang('ia.attr.licenseClass') <span class="text-danger">*</span></label>
                                </div>
                                <div class="form-group row">
                                    <select class="selectpicker" multiple data-style="form-control">
                                        
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">

                                <select class="selectpicker" multiple data-style="form-control btn-info">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <input type="text" id="remarks" class="form-control">
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
function showfield1(name){
    
    if(name == 'Other') {
        $('#divspecify1').show();
    }
    else {
        $('#divspecify1').hide();
    }
  
}
function showfield2(name){

    if(name == 'other') {
        $('#divspecify2').show();
    }
    else {
        $('#divspecify2').hide();
    }
  
}
function showfield3(name){

    if(name == 'yes') {
        $('#divspecify3').show();
    }
    else {
        $('#divspecify3').hide();
    }   
}
</script>


