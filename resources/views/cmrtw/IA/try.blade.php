<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">Step wizard</h4>
                <h6 class="card-subtitle">You can find the <a href="http://www.jquery-steps.com" target="_blank">offical website</a></h6>
                <form action="#" class="tab-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Personal Info</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.resource')</label>
                                    <select class="form-control select" id="bankloc" name='bankloc' onchange="offerConfirm(this.options[this.selectedIndex].value)" required>
                                        <option value="">Please Select</option>
                                        <option value="Letter">@lang('offerconfirmation.attr.letter')</option>
                                        <option value="Email">@lang('offerconfirmation.attr.email')</option>
                                        <option value="Telephone">@lang('offerconfirmation.attr.telephone')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- letter -->
                                    <div id="letterHide" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.letterdate')</label>
                                        <input class="form-control selectLetter" type="date"  id="letterdate">
                                    </div>
                                    <!-- email -->
                                    <div id="emailHide" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.emaildate')</label>
                                        <input class="form-control selectEmail" type="date"  id="emaildate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- call -->
                                    <div id="callHide" class="form-group" style="display:none">
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbyob')</label>
                                            </div>
                                            <div class="col-md-5">
                                                    <label>@lang('offerconfirmation.attr.date')</label>
                                                    <input type="date" class="form-control selectCall">
                                            </div>
                                            <div class="col-md-5">
                                                    <label>@lang('offerconfirmation.attr.time')</label>
                                                    <input type="time" class="form-control selectCall">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.personincharged')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.cmname')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-2">
                                                <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.callbycm')</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.date')</label>
                                                    <input type="date" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.time')</label>
                                                    <input type="time" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>@lang('offerconfirmation.attr.obname')</label>
                                                    <input type="text" class="form-control selectCall"  >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.detailconfirmation')</label>
                                    <div class="form-group">
                                        <select class="form-control select" id="result" name='result' onchange="myFunction(this.options[this.selectedIndex].value)" required>
                                            <option value="">@lang('offerconfirmation.attr.result')</option>
                                            <option value="Yes">@lang('offerconfirmation.attr.yes')</option>
                                            <option value="No">@lang('offerconfirmation.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <div id="hideResult" class="form-group" style="display:none">
                                        <label for="example-text-input" class="col-form-label">@lang('offerconfirmation.attr.reasons')</label>
                                        <textarea class="form-control" rows="5" type="textarea"  id="reasons"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>Appointment</h6>
                    <section>
                        <div class="row">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal none-border" id="my-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Set Appointment with Insured Person</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Add Appointment</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="modal fade none-border" id="add-new-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="time" name="category-name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Choose Place</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="success">Insured Person House</option>
                                                            <option value="success">Perkeso Branch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </section>
                    <!-- Step 3 -->
                    <h6>Interview</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="int1">Interview For :</label>
                                    <input type="text" class="form-control" id="int1"> </div>
                                <div class="form-group">
                                    <label for="intType1">Interview Type :</label>
                                    <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                        <option value="Banquet">Normal</option>
                                        <option value="Fund Raiser">Difficult</option>
                                        <option value="Dinner Party">Hard</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Location1">Location :</label>
                                    <select class="custom-select form-control" id="Location1" name="location">
                                        <option value="">Select City</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Dubai">Dubai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Interview Date :</label>
                                    <input type="date" class="form-control" id="jobTitle2">
                                </div>
                                <div class="form-group">
                                    <label>Requirements :</label>
                                    <div class="c-inputs-stacked">
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6>Remark</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Behaviour :</label>
                                    <input type="text" class="form-control" id="behName1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Confidance</label>
                                    <input type="text" class="form-control" id="participants1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Result</label>
                                    <select class="custom-select form-control" id="participants1" name="location">
                                        <option value="">Select Result</option>
                                        <option value="Selected">Selected</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Call Second-time">Call Second-time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="decisions1">Comments</label>
                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rate Interviwer :</label>
                                    <div class="c-inputs-stacked">
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function offerConfirm(aval) {
        if (aval == "Letter") {
            $('#letterHide').show();
            $('#emailHide').hide();
            $('#callHide').hide();
            
        } 
        else if (aval == "Email"){
            $('#emailHide').show();
            $('#letterHide').hide();
            $('#callHide').hide();
        }
        else if (aval == "Telephone"){
            $('#callHide').show();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
        else {
            $('#callHide').hide();
            $('#emailHide').hide();
            $('#letterHide').hide();
        }
    }
    function myFunction(aval) {
        if (aval == "No") {
            $('#hideResult').show();   
        }
        else {
            $('#hideResult').hide(); 
        }
    }
</script>