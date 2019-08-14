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
                                                <label class="control-label">@lang('caseMgmt.attr.view_report')</label><br>
                                                <input type="text" id="view_report" class="form-control" disabled >
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.current_ability')</label><br>
                                                    <input type="text" id="current_ability" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.verify')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                        <option value="no">@lang('caseMgmt.attr.no')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.progress_report')</label><br>
                                                    <input type="date" id="progress_report" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label><br>
                                                    <input type="text" id="remarks" class="form-control">
                                                </div>
                                        </div>
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
        