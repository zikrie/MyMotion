<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                            <h5 class="card-title"> @lang('caseMgmt.attr.case_status_details')</h5>
                        
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.current_status')</label>
                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                            <option value="">Please Select</option>
                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                           
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.current_date')</label>
                                        <input type="date" id="current_date" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.initial_status')</label>
                                            <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                    <option value="no">@lang('caseMgmt.attr.no')</option>
                                                   
                                                </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.initial_date')</label>
                                            <input type="date" id="initial_date" class="form-control" disabled>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.hierarchy_rtw')</label>
                                            <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="hiera1">@lang('caseMgmt.attr.hiera1')</option>
                                                    <option value="hiera2">@lang('caseMgmt.attr.hiera2')</option>
                                                    <option value="hiera3">@lang('caseMgmt.attr.hiera3')</option>
                                                    <option value="hiera4">@lang('caseMgmt.attr.hiera4')</option>
                                            </select>
                                        </div>
                                    </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <input type="text" id="remarks" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.case_status')</label>
                                        <select name="select_opt" id="select_opt" class="form-control" required> 
                                                <option value="">Please Select</option>
                                                <option value="case_status1">@lang('caseMgmt.attr.case_status1')</option>
                                                <option value="case_status2">@lang('caseMgmt.attr.case_status2')</option>
                                                <option value="case_status3">@lang('caseMgmt.attr.case_status3')</option>
                                                <option value="case_status4">@lang('caseMgmt.attr.case_status4')</option>
                                               
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.plan_type')</label>
                                        <select name="select_opt" id="select_opt" class="form-control" required> 
                                                <option value="">Please Select</option>
                                                <option value="plan_type1">@lang('caseMgmt.attr.plan_type1')</option>
                                                <option value="plan_type2">@lang('caseMgmt.attr.plan_type2')</option>
                                                <option value="plan_type3">@lang('caseMgmt.attr.plan_type3')</option>
                                               
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50" disabled></textarea>
                                    </div>
                                </div>
                            
                              



                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>

          

