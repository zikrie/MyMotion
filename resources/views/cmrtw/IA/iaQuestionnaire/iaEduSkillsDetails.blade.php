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
                                    <label class="control-label">@lang('caseMgmt.attr.highest_edu')</label>
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
                                <div class="form-group" id="divspecify1" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="specify" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.pro_qualification')</label>
                                    <select class="form-control">

                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('ia.attr.license')</label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%;border:1px" multiple="multiple" data-placeholder="Please Select">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('ia.attr.licenseClass')</label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Please Select">
                                        <optgroup class="form-control" label="">
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
                                        </optgroup>   
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.license_vocational')</label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%;border:1px" multiple="multiple" data-placeholder="Please Select">
                                        <optgroup class="form-control" label="">
                                            <option value="gdl">@lang('caseMgmt.attr.gdl_license')</option>
                                            <option value="psv">@lang('caseMgmt.attr.psv_license')</option>
                                            <option value="conductor">@lang('caseMgmt.attr.conductor_license')</option>
                                        </optgroup>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.language_proficiency')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="">Please Select</option>
                                            <option value="speak">@lang('caseMgmt.attr.speaking')</option>
                                            <option value="write">@lang('caseMgmt.attr.writing')</option>
                                            <option value="read">@lang('caseMgmt.attr.reading')</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.language')</label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%" onchange="showfield1(this.options[this.selectedIndex].value)" multiple="multiple" data-placeholder="Please Select">
                                        <optgroup class="form-control" label="">
                                            <option value="">Please Select</option>
                                            <option value="bm">@lang('caseMgmt.attr.bm')</option>
                                            <option value="eng">@lang('caseMgmt.attr.eng')</option>
                                            <option value="tamil">@lang('caseMgmt.attr.tamil')</option>
                                            <option value="other">@lang('caseMgmt.attr.others')</option>
                                        </optgroup>   
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 nopadding">
                                <div class="form-group" id="divspecify2" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="specify" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.grade')</label>
                                    <div class="input-group">
                                        <select class="form-control" tabindex="1">
                                            <option value="">Please Select</option>
                                            <option value="good">@lang('caseMgmt.attr.good')</option>
                                            <option value="intermediate">@lang('caseMgmt.attr.intermediate')</option>
                                            <option value="low">@lang('caseMgmt.attr.low')</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button" onclick="education();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="eduSkills"></div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.add_skills')</label>
                                    <input type="text" id="add_skills" class="form-control">
                                </div>
                            </div>
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

    if(name == 'other') {
        $('#divspecify2').show();
    }
    else {
        $('#divspecify2').hide();
    }   
}
</script>


