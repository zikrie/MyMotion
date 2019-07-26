<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row p-t-20"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.marriage_status')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.single')</option>
                                        <option value="no">@lang('caseMgmt.attr.married')</option>
                                        <option value="no">@lang('caseMgmt.attr.widower')</option>
                                        <option value="no">@lang('caseMgmt.attr.widow')</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.partner_working')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.dependent_number')</label>
                                    <div class="row">
                                        <div class="col-sm-6 nopadding">
                                            <div class="form-group">
                                               <select class="form-control">
                                                    <option value="">Please Select</option>
                                                    <option value="wife">@lang('caseMgmt.attr.wife')</option>
                                                    <option value="not_school">@lang('caseMgmt.attr.not_school')</option>
                                                    <option value="primary_school">@lang('caseMgmt.attr.primary_school')</option>
                                                    <option value="secondary_school">@lang('caseMgmt.attr.secondary_school')</option>
                                                    <option value="university">@lang('caseMgmt.attr.university')</option>
                                                    <option value="disabled">@lang('caseMgmt.attr.disabled')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 nopadding">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="rm_value" name="rm_value" value="" placeholder="RM">
                                                    
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" onclick="dependentCost();"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dependentField"></div>
                        <div class="row p-t-20"> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.estimate_living_cost')</label>
                                    <div class="row">
                                        <div class="col-sm-6 nopadding">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="">Please Select</option>
                                                    <option value="accomodation">@lang('caseMgmt.attr.accomodation')</option>
                                                    <option value="education_loan">@lang('caseMgmt.attr.education_loan')</option>
                                                    <option value="other_expenditure">@lang('caseMgmt.attr.other_expenditure')</option>
                                                    <option value="other_loan">@lang('caseMgmt.attr.other_loan')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 nopadding">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="rm_value" name="rm_value" value="" placeholder="RM">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" onclick="livingCost();"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="living"></div>
                        <div class="row p-t-20"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.residence')</label>
                                    <select name="select_opt" id="select_opt" class="form-control" onchange="showfield2(this.options[this.selectedIndex].value)" required> 
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no1">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="divspecify3" style="display:none;">
                                    <label class="control-label">If No, Please specify</label>
                                    <input type="text" id="specify" class="form-control">
                                </div>
                                <div class="form-group" id="divspecify4" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.residence_type')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="apartment">@lang('caseMgmt.attr.apartment')</option>
                                        <option value="terrace_house">@lang('caseMgmt.attr.terrace_house')</option>
                                        <option value="bungalow">@lang('caseMgmt.attr.bungalow')</option>
                                        <option value="rumah_panjang">@lang('caseMgmt.attr.rumah_panjang')</option>
                                        <option value="worker_house">@lang('caseMgmt.attr.worker_house')</option>
                                        <option value="container_house">@lang('caseMgmt.attr.container_house')</option>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.monthly_finance')</label>
                                    <select class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="partner_income">@lang('caseMgmt.attr.partner_income')</option>
                                        <option value="baitulmal">@lang('caseMgmt.attr.baitulmal')</option>
                                        <option value="perkeso_compesation">@lang('caseMgmt.attr.perkeso_compesation')</option>
                                        <option value="jkm_allowance">@lang('caseMgmt.attr.jkm_allowance')</option>
                                        <option value="freelance">@lang('caseMgmt.attr.freelance')</option>
                                        <option value="business">@lang('caseMgmt.attr.business')</option>
                                        <option value="children_aid">@lang('caseMgmt.attr.children_aid')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <input type="text" id="remarks" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20"> 
                            <div class="col-md-6">
                                <div class="form-group" id="divspecify" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="specify" class="form-control">
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

    function showfield2(name){
        if(name == 'no1') {
            $('#divspecify3').show();
        }
        else {
            $('#divspecify3').hide();
        }

        if(name == 'yes') {
            $('#divspecify4').show();
        }
        else {
            $('#divspecify4').hide();
        }
    }

    var dependent = 1;

    function dependentCost() {

        dependent++;
        var objTo = document.getElementById('dependentField')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + dependent);
        var rdiv = 'removeclass' + dependent;
        divtest.innerHTML = '<div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('caseMgmt.attr.dependent_number')</label><div class="row"><div class="col-sm-6 nopadding"><div class="form-group"><select class="form-control"><option value="">Please Select</option><option value="wife">@lang('caseMgmt.attr.wife')</option><option value="not_school">@lang('caseMgmt.attr.not_school')</option><option value="primary_school">@lang('caseMgmt.attr.primary_school')</option><option value="secondary_school">@lang('caseMgmt.attr.secondary_school')</option><option value="university">@lang('caseMgmt.attr.university')</option><option value="disabled">@lang('caseMgmt.attr.disabled')</option></select></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="rm_value" name="rm_value" value="" placeholder="RM"><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_dependentCost('+dependent+');"><i class="fa fa-minus"></i></button></div></div></div></div></div></div></div></div>';

        objTo.appendChild(divtest)
    }

    function remove_dependentCost(rid) {
        $('.removeclass' + rid).remove();
        dependent--;
    }

    var living = 1;

    function livingCost() {

        living++;
        var objTo = document.getElementById('living')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + living);
        var rdiv = 'removeclass' + living;
        divtest.innerHTML = '<div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('caseMgmt.attr.estimate_living_cost')</label><div class="row"><div class="col-sm-6 nopadding"><div class="form-group"><select class="form-control"><option value="">Please Select</option><option value="accomodation">@lang('caseMgmt.attr.accomodation')</option><option value="education_loan">@lang('caseMgmt.attr.education_loan')</option><option value="other_expenditure">@lang('caseMgmt.attr.other_expenditure')</option><option value="other_loan">@lang('caseMgmt.attr.other_loan')</option></select></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="rm_value" name="rm_value" value="" placeholder="RM"><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_livingCost('+living+');"><i class="fa fa-minus"></i></button></div></div></div></div></div></div>/div></div>';

        objTo.appendChild(divtest)
    }

    function remove_livingCost(rid) {
        $('.removeclass' + rid).remove();
        living--;
    }
</script>



