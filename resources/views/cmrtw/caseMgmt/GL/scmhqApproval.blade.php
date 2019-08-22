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
                                                    <option value="approve">@lang('caseMgmt.attr.approve')</option>
                                                    <option value="not_approve">@lang('caseMgmt.attr.not_approve')</option>
                                                    <option value="pending">@lang('caseMgmt.attr.pending')</option>
                                                </select>
                                            </div>
                                        </div>
                            </div>
                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                             <div class="form-group">
                                                     <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                     <textarea class="form-control" rows="5" type="textarea"  id="remarks"></textarea>
                                            </div>
                                            </div> 
                                    </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    



            

