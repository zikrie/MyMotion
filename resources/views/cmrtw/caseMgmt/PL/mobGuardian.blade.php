<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">

                        <div id="accordionLesisure" role="tablist" class="accordion" >
                            
                            
                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingMaklumatPengiring">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseMaklumatPengiring" aria-expanded="true" aria-controls="collapseMaklumatPengiring">
                                                    <i class="fa fa-plus"></i> @lang('caseMgmt.attr.guardian_details')
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMaklumatPengiring" class="collapse" role="tabpanel" aria-labelledby="headingMaklumatPengiring">
                                            <div class="card-body">
                                        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.need_guardian')</label>
                                                            <select class="form-control select" id="mobiliti">
                                                                <option value="">Please Select </option>
                                                                <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                                <option value="no">@lang('caseMgmt.attr.no')</option>                                     
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.guardian_name')</label>
                                                            <input type="text" id="guardian_name" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.id_no')</label>
                                                            <input type="date" id="id_no" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                                            <input type="text" id="phone_number" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">       
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.relationship_guardian')</label>
                                                            <select class="form-control select" id="relationship_guardian"  onchange="myWaris(this.options[this.selectedIndex].value)">
                                                                <option value="">Please Select </option>
                                                                <option value="relationship_guardian1">@lang('caseMgmt.attr.relationship_guardian1')</option>
                                                                <option value="relationship_guardian2">@lang('caseMgmt.attr.relationship_guardian2')</option>
                                                                <option value="relationship_guardian3">@lang('caseMgmt.attr.relationship_guardian3')</option>
                                                                <option value="relationship_guardian4">@lang('caseMgmt.attr.relationship_guardian4')</option>
                                                                <option value="relationship_guardian5">@lang('caseMgmt.attr.relationship_guardian5')</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="hideWaris" class="form-group" style="display:none"> 
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('caseMgmt.attr.relationship_guardian5')</label>
                                                                <input type="text" id="relationship_guardian5" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>



                                    <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingMaklumatPeralatan">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseMaklumatPeralatan" aria-expanded="true" aria-controls="collapseMaklumatPeralatan">
                                                    <i class="fa fa-plus"></i> @lang('caseMgmt.attr.equipment_details')
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMaklumatPeralatan" class="collapse" role="tabpanel" aria-labelledby="headingMaklumatPeralatan">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.equipment_name')</label>
                                                            <input type="twxt" id="equipment_name" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.equipment_quantity')</label>
                                                            <input type="text" id="equipment_quantity" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                                SAVE & CONTINUE</button>
                                                <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                                                <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>                            --}}
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



