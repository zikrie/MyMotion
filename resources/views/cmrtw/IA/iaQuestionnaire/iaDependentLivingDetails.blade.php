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
                        <div class="row p-t-20">
                            <div class="table-responsive m-t-40" >
                                <table id="" cellspacing="0" width="90%" >
                                    <thead>
                                        <tr>
                                            <th><label class="control-label">@lang('caseMgmt.attr.dependent_number') <span class="text-danger">*</span></label></th>
                                            <th><label class="control-label">@lang('caseMgmt.attr.normal') <span class="text-danger">*</span></label></th>
                                            <th><label class="control-label">@lang('caseMgmt.attr.pwd')</label></th>
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
                                            <td><label class="control-label">@lang('caseMgmt.attr.noFormalEdu')</label></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="noFormalEdu" value="" placeholder="enter number of members" required></div><div class="col-md-4">
                                                <label class="control-label">@lang('caseMgmt.attr.person')</label></div></div></td>
                                            <td><div class="row"><div class="col-md-6"><input type="text" class="form-control" id="noFormalEduPWD" value="" placeholder="enter number of members" required></div><div class="col-md-4">
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
                            <div class="col-md-6">
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.monthly_finance')<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">RM <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.estimate_living_cost')<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">RM <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20"> 
                            <!-- monthly income -->
                            <div class="col-md-6">
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.salary_income')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="salary_income" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.spouse_income')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="spouse_income" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.baitulmal')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="baitulmal" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.children_aid')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="children_aid" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.perkeso_compesation')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="perkeso_compesation" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.jkm_allowance')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="jkm_allowance" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.ngo_aid')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="ngo_aid" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.freelance')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="freelance" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.business')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="business" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.others')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="othersMonincome" value="" placeholder="please specify" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="otherMonthlyincome1" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" onclick="otherIncomeFunc();"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="otherIncome"></div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group" style="text-align:right;">
                                            <label class="control-label">@lang('caseMgmt.attr.total')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="totalIncome" value="" required readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- estimated monthly income -->
                            <div class="col-md-6">
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.expensesDependent')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="expensesDependent" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.vehicles')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="vehicles" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.housing')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="housing" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.eduLoan')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eduLoan" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.otherLoan')</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="othersLoan" value="" placeholder="please specify" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="otherLoans" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" onclick="otherEstimateIncomeFunc();"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="otherLoansDisp"></div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group" style="text-align:right;">
                                            <label class="control-label">@lang('caseMgmt.attr.total')</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="totalEstimateIncome" value="" required disabled>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- remarks -->
                        <div class="row p-t-20"> 
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <textarea class="form-control clearFields" rows="5" type="textarea"  id="dependentRemarks"></textarea>
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

    //add other monthly income for other-mat
    var otherincome = 1;

    function otherIncomeFunc() {

        otherincome++;
        var objTo = document.getElementById('otherIncome')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + otherincome);
        var rdiv = 'removeclass' + otherincome;
        divtest.innerHTML = '<div class="row"><div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" id="othersMonincome'+otherincome+'" value="" placeholder="please specify" required></div></div><div class="col-sm-6"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="otherMonthlyincome'+otherincome+'" name="monthincome" value="" placeholder="enter amount" onblur="calcMonthlyIncome();" required><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_otherIncomeFunc('+otherincome+');"><i class="fa fa-minus"></i></button></div></div></div></div></div>';

        objTo.appendChild(divtest)
    }

    function remove_otherIncomeFunc(rid) {
        $('.removeclass' + rid).remove();
        otherincome--;
    }

        //add other estimated monthly income for other-mat
        var otherEstimate = 1;

        function otherEstimateIncomeFunc() {

            otherEstimate++;
            var objTo = document.getElementById('otherLoansDisp')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "removeclass" + otherEstimate);
            var rdiv = 'removeclass' + otherEstimate;
            divtest.innerHTML = '<div class="row"><div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" id="otherLoans'+otherEstimate+'" value="" placeholder="please specify" required></div></div><div class="col-sm-6"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="otherLoans'+otherEstimate+'" name="estimateincome" value="" placeholder="enter amount" onblur="calcEstimateIncome();" required><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_otherEstimateIncomeFunc('+otherEstimate+');"><i class="fa fa-minus"></i></button></div></div></div></div></div>';

            objTo.appendChild(divtest)
        }

        function remove_otherEstimateIncomeFunc(rid) {
            $('.removeclass' + rid).remove();
            otherEstimate--;
        }

        //calculate total monthly income-mad
        function calcMonthlyIncome(){
            var arrMonthly = document.getElementsByName('monthincome');

            var totMonthly=0;

            for(var i=0;i<arrMonthly.length;i++){

                if(parseFloat(arrMonthly[i].value))

                totMonthly += parseFloat(arrMonthly[i].value);

            }

            document.getElementById('totalIncome').value = totMonthly;
        }

        //calculate total estimated monthly income-mad
        function calcEstimateIncome(){

            var arrEstimate = document.getElementsByName('estimateincome');

            var totEstimate=0;

            for(var i=0;i<arrEstimate.length;i++){

                if(parseFloat(arrEstimate[i].value))

                totEstimate += parseFloat(arrEstimate[i].value);

            }

            document.getElementById('totalEstimateIncome').value = totEstimate;
        }
        
        
</script>



