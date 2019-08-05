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
                                    <label class="control-label">@lang('caseMgmt.attr.ip_decision')</label>
                                     <input type="text" id="ip_decision" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.permission_letter')</label>
                                    <input type="text" id="permission_letter" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.date_agreement')</label>
                                    <input type="date" id="date_agreement" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label>
                                    <input type="text" id="casemgr_name" class="form-control">
                                </div>
                            </div>         
                            
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>

          

