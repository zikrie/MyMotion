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
                                                <label class="control-label">@lang('ia.attr.numbersOfWorking')</label>
                                                <input type="text" id="name" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('ia.attr.workingHours')</label>
                                                <input type="text" id="name" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.ot_time')</label>
                                                <input type="text" id="ot_time" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('ia.attr.hoursOfDay')</label>
                                                <input type="text" id="hoursOfDay" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.jobscope')</label>
                                                <input type="text" id="hoursOfDay" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.job_req')</label>
                                                <input type="text" id="job_req" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.req_fce')</label>
                                                <input type="text" id="req_fce" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.wsa_report')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                    <option value="no">@lang('caseMgmt.attr.no')</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.fce_justify')</label>
                                                <input type="text" id="fce_justify" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                     
                                                <label class="control-label">@lang('caseMgmt.attr.supporting_document')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="wsa_report">@lang('caseMgmt.attr.wsa_report')</option>
                                                    <option value="job_taskdes">@lang('caseMgmt.attr.job_taskdes')</option>
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
                        </div>
                    </form>
            </div>
                
            </div>
        </div>
    </div>
