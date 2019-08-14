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
                                                <label class="control-label">@lang('caseMgmt.attr.ob_fired')</label><br>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.dismissed_date')</label>
                                                    <input type="date" id="dismissed_date" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.ob_status')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="ob_status1">@lang('caseMgmt.attr.ob_status1')</option>
                                                        <option value="ob_status2">@lang('caseMgmt.attr.ob_status2')</option>
                                                        <option value="ob_status3">@lang('caseMgmt.attr.ob_status3')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.date_status')</label>
                                                    <input type="text" id="date_status" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                    <input type="text" id="remarks" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.update_date')</label><br>
                                                    <input type="date" id="update_date" class="form-control" >
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    
                </div>
            </div>
        </div>
        
        
        
            
        
        