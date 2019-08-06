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
                                <label class="control-label">@lang('caseMgmt.attr.treatment_type') <span class="text-danger">*</span></label>
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="operation">@lang('caseMgmt.attr.operation')</option>
                                    <option value="conservative">@lang('caseMgmt.attr.conservative')</option>
                                    <option value="therapy">@lang('caseMgmt.attr.therapy')</option>
                                    <option value="alternative_treatment">@lang('caseMgmt.attr.alternative_treatment')</option>
                                    <option value="others_option">@lang('caseMgmt.attr.others_option')</option>   
                                </select> 
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_specify') <span class="text-danger">*</span></label>
                                <input type="text" id="treatment_specify" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                <div class="input-group">
                                    <input type="text" id="remarks" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" onclick="treatmentDetails();"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="treatmentDetail"></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


