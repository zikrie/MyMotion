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
                                    <label class="control-label">@lang('caseMgmt.attr.marriage_status') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
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
                                    <label class="control-label">@lang('caseMgmt.attr.partner_working') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="partner_workingyes" name="partner_working" class="custom-control-input" required>
                                            <label class="custom-control-label" for="partner_workingyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="partner_workingno" name="partner_working" class="custom-control-input" required>
                                            <label class="custom-control-label" for="partner_workingno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-t-20 p-l-20">
                            <div class="table-responsive m-t-40" >
                                <table id="" cellspacing="0" width="90%" >
                                    <thead>
                                        <tr>
                                            <th><label class="control-label">@lang('caseMgmt.attr.dependent_number') <span class="text-danger">*</span></label></th>
                                            <th><label class="control-label">@lang('caseMgmt.attr.normal') <span class="text-danger">*</span></label></th>
                                            <th><label class="control-label"><u>@lang('caseMgmt.attr.pwd')</u></label></th>
                                        </tr>
                                    </thead>
                                    <tbody class='align-middle'>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.wife')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="wife" value="" placeholder="enter number of members" required></div><div class="col-md-4"><label>@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="wifePWD" value="" placeholder="enter number of members" required></div><div class="col-md-4"><label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.not_school')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="not_school" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="not_schoolPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.primary_school')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="primary_school" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="primary_schoolPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.secondary_school')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="secondary_school" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="secondary_schoolPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.university')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="university" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="universityPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label">@lang('caseMgmt.attr.disabled')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="disabled" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="disabledPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.residence') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="residenceYes" name="residence" class="custom-control-input" onclick="residence2()" required>
                                            <label class="custom-control-label" for="residenceYes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="residenceNo" name="residence" class="custom-control-input" onclick="residence1()" required>
                                            <label class="custom-control-label" for="residenceNo">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="residenceno" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="specify" class="form-control">
                                </div>
                                <div class="form-group" id="residenceyes" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.residence_type') <span class="text-danger">*</span></label>
                                    <select class="form-control" onchange="residenceType(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="flat">@lang('caseMgmt.attr.flat')</option>
                                        <option value="apartment">@lang('caseMgmt.attr.apartment')</option>
                                        <option value="terrace_house">@lang('caseMgmt.attr.terrace_house')</option>
                                        <option value="bungalow">@lang('caseMgmt.attr.bungalow')</option>
                                        <option value="long_house">@lang('caseMgmt.attr.long_house')</option>
                                        <option value="worker_house">@lang('caseMgmt.attr.worker_house')</option>
                                        <option value="container_house">@lang('caseMgmt.attr.container_house')</option>  
                                        <option value="otherHouse">@lang('caseMgmt.attr.otherHouse')</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="otherHouse" style="display:none;">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input type="text" id="otherhouse" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-t-20"> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.estimate_living_cost') <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-sm-6 nopadding">
                                            <div class="form-group">
                                                <select class="form-control" required>
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
                                                    <input type="text" class="form-control" id="rm_value" name="rm_value" value="" placeholder="RM" required>
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
                                    <label class="control-label">@lang('caseMgmt.attr.residence') <span class="text-danger">*</span></label>
                                    <select name="select_opt" id="select_opt" class="form-control" onchange="showfield2(this.options[this.selectedIndex].value)" required> 
                                        <option value="">Please Select</option>
                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                        <option value="no1">@lang('caseMgmt.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row p-t-20"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.monthly_finance') <span class="text-danger">*</span></label>
                                    <select class="form-control" required>
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

    function residence1() {
        $('#residenceno').show();
        $('#residenceyes').hide();
    }
    function residence2() {
        $('#residenceyes').show();
        $('#residenceno').hide();
    }

    function residenceType(name) {
        if(name == 'otherHouse'){
            $('#otherHouse').show();
        }
        else{
            $('#otherHouse').hide();
        }
    }

    var dependent = 1;

    function dependentCost() {

        dependent++;
        var objTo = document.getElementById('dependentField')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + dependent);
        var rdiv = 'removeclass' + dependent;
        divtest.innerHTML = '<div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('caseMgmt.attr.dependent_number')</label><div class="row"><div class="col-sm-6 nopadding"><div class="form-group"><select class="form-control"><option value="">Please Select</option><option value="wife">@lang('caseMgmt.attr.wife')</option><option value="not_school">@lang('caseMgmt.attr.not_school')</option><option value="primary_school">@lang('caseMgmt.attr.primary_school')</option><option value="secondary_school">@lang('caseMgmt.attr.secondary_school')</option><option value="university">@lang('caseMgmt.attr.university')</option><option value="disabled">@lang('caseMgmt.attr.disabled')</option></select></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="noLiving" name="noLiving" value="" placeholder="Number of person"><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_dependentCost('+dependent+');"><i class="fa fa-minus"></i></button></div></div></div></div></div></div></div></div>';

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



