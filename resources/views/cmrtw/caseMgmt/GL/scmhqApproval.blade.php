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
                                                <label class="control-label">@lang('caseMgmt.attr.action')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="approved">@lang('caseMgmt.attr.approved')</option>
                                                    <option value="not_approved">@lang('caseMgmt.attr.not_approved')</option>
                                                    <option value="postponed">@lang('caseMgmt.attr.postponed')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.approval_officer')</label>
                                                    <input type="text" id="approval_officer" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.approval_date')</label>
                                                    <input type="date" id="approval_date" class="form-control" disabled>
                                                    </div>
                                            </div> <div class="col-md-6">
                                             <div class="form-group">
                                                     <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                     <input type="text" id="remarks" class="form-control">
                                            </div>
                                            </div> <div class="col-md-6">
                                                     <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.glrefno')</label>
                                                    <input type="text" id="glrefno" class="form-control" disabled>
                                                </div>
                                             </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    



            

