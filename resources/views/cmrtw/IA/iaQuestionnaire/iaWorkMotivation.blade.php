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
                                    <label class="control-label">@lang('caseMgmt.attr.interested_work')</label>
                                    <select class="form-control">
                                        
                                        <option value="">Please Select</option>
                                        <option value="">@lang('caseMgmt.attr.yes')</option>
                                        <option value="">@lang('caseMgmt.attr.no')</option>
                                        
                                    </select>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.reason')</label>
                                    <input type="text" id="reason" class="form-control">
                                </div>
                            </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

          

