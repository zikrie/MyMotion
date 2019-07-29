<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="form-group">    
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.work')</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="yes1" name="yes1" class="custom-control-input">
                        <label class="custom-control-label" for="yes1">@lang('caseMgmt.attr.yes')</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="no1" name="yes1" class="custom-control-input">
                        <label class="custom-control-label" for="no1">@lang('caseMgmt.attr.no')</label>
                    </div>
                </div>
            </div>


            
            {{-- <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.multiple')</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="yes11" name="yes2" class="custom-control-input">
                        <label class="custom-control-label" for="yes11">@lang('caseMgmt.attr.yes')</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="no11" name="yes2" class="custom-control-input">
                        <label class="custom-control-label" for="no11">@lang('caseMgmt.attr.no')</label>
                    </div>
                </div>
            </div>  --}}

            <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.multiple')</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="yes11" name="yes2" class="custom-control-input" onclick="show1();">
                        <label class="custom-control-label" for="yes11">@lang('caseMgmt.attr.yes')</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="no11" name="yes2" class="custom-control-input" onclick="show2();">
                        <label class="custom-control-label" for="no11">@lang('caseMgmt.attr.no')</label>
                    </div>
                </div>
             </div> 
        </div> 

            {{-- bukan multiple --}}
            <div id="divNotMulti" class="form-group" style="display:none">
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label class="control-label">@lang('ia.attr.positionName')</label>
                                <input type="text" id="name" class="form-control">
                        </div>
                    </div>     
                    <div class="col-md-6">
                        <div class="form-group">                     
                            <label class="control-label">@lang('ia.attr.categoryType')</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                </div>
            
                <div class="row p-t-20">                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.industry')</label>
                            <select class="form-control select" id="industri" name='industri' onchange="industry(this.options[this.selectedIndex].value)" required>
                                <option value="">Please Select</option>
                                <option value="pertanian">Agriculture</option>
                                <option value="perhutanan">Forestry</option>
                                <option value="perikanan">Fishery</option>
                                <option value="perlombongan">Mining</option>
                                <option value="pembuatan">Manufacturing</option>
                                <option value="perkhidmatan">Services</option>
                                <option value="pembinaan">Construction</option>
                                <option value="pengangkutan">Transportation</option>
                                <option value="perkidmatanair">Water and Sewerage Services</option>
                                <option value="elektrik">Electric and Electronics</option>
                                <option value="minyak">Oil and Gas</option>
                                <option value="perdagangan">Trade, Commerce and Retail</option>
                                <option value="perkhidmatanawam">Public services</option>
                                <option value="industrikewangan">Financial Institutions and Insurance</option>
                                <option value="kerjasendiri">Self-work</option>
                                <option value="others">Other (Specify)</option>
                            </select>
                        </div>
                    </div> 
                      
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <div id="othersHide" class="form-group" style="display:none">                   
                                <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                <input type="text" id="otherNotMulti" class="form-control">
                            </div>
                        </div>
                    </div>                      
                </div>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.numbersOfWorking')</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.workingHours')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Normal Working Hours</option>
                                <option value="">Shif</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">   
                            <label for="example-text-input" class="col-form-label">@lang('ia.attr.fulltimeWorkingAbility')</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="yes111" name="yes22" class="custom-control-input">
                                <label class="custom-control-label" for="yes111">@lang('ia.attr.yes')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="no111" name="yes22" class="custom-control-input" >
                                <label class="custom-control-label" for="no111">@lang('ia.attr.no')</label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.hoursOfDay')</label>
                            <input type="text" id="jam" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.scopeOfTasks')</label>
                            <input type="text" id="skop" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.wagesPayment')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Monthly Rate</option>
                                <option value="">Daily Rate</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.finalSalary')</label>
                            <input type="text" id="gaji" class="form-control" value="RM">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">   
                            <label for="example-text-input" class="col-form-label">@lang('ia.attr.medicalLeave')</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="yes1111" name="yes222" class="custom-control-input">
                                <label class="custom-control-label" for="yes1111">@lang('ia.attr.yes')</label>
                            </div>
        
                            <div class="custom-control custom-radio">
                                <input type="radio" id="no1111" name="yes222" class="custom-control-input" >
                                <label class="custom-control-label" for="no1111">@lang('ia.attr.no')</label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.statusSalary')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Full Salary</option>
                                <option value="">Half Salary</option>  
                                <option value="">No Salary</option>                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Remarks</label>
                            <input type="text" id="remarks" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- sejarah pekerjaan -->
                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.attr.workingHistory')</h4>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.employersName')</label>
                            <input type="text" id="majikan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.position')</label>
                            <input type="text" id="jawatan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.income')</label>
                            <input type="text" id="pendapatan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.durationOfEmployment')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Less than a year</option>
                                <option value="">1-5 Years</option>
                                <option value="">6-10 Years</option>  
                                <option value="">More than 10 Years</option>                               
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.reasonToQuit')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Career advancement</option>
                                <option value="">Health</option>
                                <option value="">VSS/MSS</option>  
                                <option value="">Others</option>                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Add Work History</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="multiple_workHistory1();"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="multiple_workHistory1"></div>
            </div> 

            {{--  multiple --}}
            <div id="divMulti" class="form-group" style="display:none">
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label class="control-label">@lang('ia.attr.positionName')</label>
                                <input type="text" id="name" class="form-control">
                        </div>
                    </div>     
                    <div class="col-md-6">
                        <div class="form-group">                     
                            <label class="control-label">@lang('ia.attr.categoryType')</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">                  
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.industry')</label>
                            <select class="form-control select" id="bankloc" name='bankloc' onchange="industry1(this.options[this.selectedIndex].value)" required>
                                <option value="">Please Select</option>
                                <option value="pertanian">Agriculture</option>
                                <option value="perhutanan">Forestry</option>
                                <option value="perikanan">Fishery</option>
                                <option value="perlombongan">Mining</option>
                                <option value="pembuatan">Manufacturing</option>
                                <option value="perkhidmatan">Services</option>
                                <option value="pembinaan">Construction</option>
                                <option value="pengangkutan">Transportation</option>
                                <option value="perkidmatanair">Water and Sewerage Services</option>
                                <option value="elektrik">Electric and Electronics</option>
                                <option value="minyak">Oil and Gas</option>
                                <option value="perdagangan">Trade, Commerce and Retail</option>
                                <option value="perkhidmatanawam">Public services</option>
                                <option value="industrikewangan">Financial Institutions and Insurance</option>
                                <option value="kerjasendiri">Self-work</option>
                                <option value="others">Other (Specify)</option>
                            </select>
                        </div>
                    </div> 
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <div id="othersHide1" class="form-group" style="display:none">                    
                                <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                <input type="text" id="otherMulti" class="form-control">
                            </div>
                        </div>
                    </div>                      
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.numbersOfWorking')</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.workingHours')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Normal Working Hours</option>
                                <option value="">Shif</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">   
                            <label for="example-text-input" class="col-form-label">@lang('ia.attr.fulltimeWorkingAbility')</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="yes123" name="yes223" class="custom-control-input">
                                <label class="custom-control-label" for="yes123">@lang('ia.attr.yes')</label>
                            </div>
        
                            <div class="custom-control custom-radio">
                                <input type="radio" id="no123" name="yes223" class="custom-control-input" >
                                <label class="custom-control-label" for="no123">@lang('ia.attr.no')</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.hoursOfDay')</label>
                            <input type="text" id="jam" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.scopeOfTasks')</label>
                            <input type="text" id="skop" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.wagesPayment')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Monthly Rate</option>
                                <option value="">Daily Rate</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.finalSalary')</label>
                            <input type="text" id="gaji" class="form-control" value="RM">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">   
                            <label for="example-text-input" class="col-form-label">@lang('ia.attr.medicalLeave')</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="yes11111" name="yes2222" class="custom-control-input">
                                <label class="custom-control-label" for="yes11111">@lang('ia.attr.yes')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="no11111" name="yes2222" class="custom-control-input" >
                                <label class="custom-control-label" for="no11111">@lang('ia.attr.no')</label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.statusSalary')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Full Salary</option>
                                <option value="">Half Salary</option>  
                                <option value="">No Salary</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Remarks</label>
                            <input type="text" id="remarks" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Add Other Employment Details</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="multiple_work();"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="multiple_work"></div>
                <br>
                <!-- sejarah pekerjaan -->
                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.attr.workingHistory')</h4>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.employersName')</label>
                            <input type="text" id="majikan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.position')</label>
                            <input type="text" id="jawatan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.income')</label>
                            <input type="text" id="pendapatan" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.durationOfEmployment')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Less than a year</option>
                                <option value="">1-5 Years</option>
                                <option value="">6-10 Years</option>  
                                <option value="">More than 10 Years</option>                                 
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.reasonToQuit')</label>
                            <select class="form-control select"  required>
                                <option value="">Please Select</option>
                                <option value="">Career advancement</option>
                                <option value="">Health</option>
                                <option value="">VSS/MSS</option>  
                                <option value="">Others</option>                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Add Work History</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="multiple_workHistory();"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="multiple_workHistory"></div>                             
            </div>
        </div> 
    </div>
</div>
</div>
</div>


 <script type="text/javascript">
    function show1()
    {
        $('#divMulti').show();
        $('#divNotMulti').hide();
    }
    function show2()
    {
        $('#divNotMulti').show();
        $('#divMulti').hide();
        
    }

    function industry(aval) 
    {
        if (aval == "others") 
        {
            $('#othersHide').show();
        } 
        else 
        {
            $('#othersHide').hide();
        }

    }
    function industry1(aval) 
    {
        if (aval == "others") 
        {
            $('#othersHide1').show();
        } 
        else 
        {
            $('#othersHide1').hide();
        }

    }


</script>
