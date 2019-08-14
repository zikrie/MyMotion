<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">

                            <div id="accordionLesisure" role="tablist" class="accordion" >
                                <div class="card m-b-0">
                                    <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingModifiDetails">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseModifiDetails" aria-expanded="true" aria-controls="collapseModifiDetails">
                                                <i class="fa fa-plus"></i> Modification Details
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseModifiDetails" class="collapse" role="tabpanel" aria-labelledby="headingModifiDetails">
                                        <div class="card-body">
                                            
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Modification Type</label>
                                                        <select class="form-control select" required>
                                                            <option value="">Please Selected</option>
                                                            <option value="">Workplace</option>
                                                            <option value="">Vehicle</option>  
                                                        </select>
                                                    </div>
                                                </div>     
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="card m-b-0">
                                    <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingWorkplaceModifi">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseWorkplaceModifi" aria-expanded="false" aria-controls="WorkplaceModifi">
                                                <i class="fa fa-plus"></i> Workplace Modification
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseWorkplaceModifi" class="collapse" role="tabpanel" aria-labelledby="headingWorkplaceModifi">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Application Date</label>
                                                        <input type="date" id="initialAssessTime" class="form-control" readonly >
                                                    </div>
                                                </div>                     
                                                <div class="col-md-4">
                                                    <label class="control-label">Related Supporting Document</label>
                                                    <select class="form-control select" id="Recommendations" name='Recommendations' onchange="ddd(this.options[this.selectedIndex].value)" required>
                                                        <option value="">Please Selected</option>
                                                        <option value="idno">Identification No.</option>
                                                        <option value="okuCard">OKU Card (If Available)</option>
                                                        <option value="ipPermissLett">Insured Person Permission letter / Employer / Owner Permis</option>
                                                        <option value="specificSugg">Specification Suggestions</option>
                                                        <option value="modifyApprLetter">Modification approval letter by PBT (If Required)</option>
                                                        <option value="empConf">Employer confirmation / Job offer letter</option>
                                                        <option value="other">Others Specify</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">WSA Report</label>
                                                        <select class="form-control select" required>
                                                            <option value="">Please Selected</option>
                                                            <option value=""></option>
                                                            <option value=""></option>  
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">Case Management Review </label>
                                                        <textarea class="form-control clearFields" rows="4" type="textarea"  id="reasons"></textarea> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="card m-b-0">
                                    <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingVehicleModifi">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseVehicleModifi" aria-expanded="false" aria-controls="collapseVehicleModifi">
                                                <i class="fa fa-plus"></i> Vehicle modification
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseVehicleModifi" class="collapse" role="tabpanel" aria-labelledby="headingVehicleModifi">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Application Date</label>
                                                        <input type="date" id="initialAssessTime" class="form-control" readonly >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Vehicle Type</label>
                                                        <select class="form-control select" required>
                                                            <option value="">Please Selected</option>
                                                            <option value="idno">Car</option>
                                                            <option value="okuCard">Motorcycle</option>
                                                            <option value="ipPermissLett">Others</option>
                                                        </select>
                                                    </div>
                                                </div>                     
                                                <div class="col-md-4">
                                                    <label class="control-label">Related Supporting Document</label>
                                                    <select class="form-control select" id="Recommendations" name='Recommendations' onchange="myFunctionSDVehicleModifi(this.options[this.selectedIndex].value)" required>
                                                        <option value="">Please Selected</option>
                                                        <option value="idno">Identification No.</option>
                                                        <option value="okuCard">OKU Card (If Available)</option>
                                                        <option value="ipPermissLett">Insured Person Permission letter / Employer / Owner Permis</option>
                                                        <option value="specificSugg">Specification Suggestions</option>
                                                        <option value="modifyApprLetter">Modification approval letter by PBT (If Required)</option>
                                                        <option value="empConf">Employer confirmation / Job offer letter</option>
                                                        <option value="other">Others Specify</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div id="specificSuggHide" class="form-group " style="display:none">
                                                            <label class="control-label">Specification Suggestions</label>
                                                            <input type="text" id="initialAssessTime" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div id="otherHide" class="form-group " style="display:none">
                                                            <label class="control-label">Others</label>
                                                            <input type="text" id="initialAssessTime" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label">Driving Test</label>
                                                    <select class="form-control select" required>
                                                        <option value="">Please Selected</option>
                                                        <option value="idno">Pass</option>
                                                        <option value="okuCard">Fail</option>
                                                    </select>
                                                </div>                                             
                                            </div>
                                            <div class="row-p-t-20">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">Case Management Review </label>
                                                        <textarea class="form-control clearFields" rows="4" type="textarea"  id="reasons"></textarea> 
                                                    </div>
                                                </div>
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

    function myFunctionSDVehicleModifi(aval) {
           if (aval == "specificSugg") {
               $('#specificSuggHide').show();
               $('#otherHide').hide();
               
           } 
           else if (aval == "other"){
               $('#otherHide').show();
               $('#specificSuggHide').hide();
           }
           else {
               $('#specificSuggHide').hide();
               $('#otherHide').hide();
           }
       }
       
       </script>
       