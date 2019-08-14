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
                                                <label class="control-label">@lang('caseMgmt.attr.view')</label><br>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="vtm_item1">@lang('caseMgmt.attr.view1')</option>
                                                        <option value="vtm_item2">@lang('caseMgmt.attr.view2')</option>
                                                       
                                                </select>
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.approval_vtm')</label><br>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="approved">@lang('caseMgmt.attr.approved')</option>
                                                            <option value="not_approved">@lang('caseMgmt.attr.not_approved')</option>
                                                           
                                                    </select>
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

        
        
        
            
        
        