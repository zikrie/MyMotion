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
                                            <label class="control-label">@lang('caseMgmt.attr.appointment_date')</label>
                                            <input type="text" id="appointment_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.appointment_time')</label>
                                                <input type="time" id="appointment_time" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.other_officer')</label>
                                                    <input type="text" id="other_officer" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label>
                                                        <input type="text" id="casemgr_name" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                                            <input type="text" id="phone_number" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('caseMgmt.attr.email')</label>
                                                                <input type="text" id="email" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                  
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



        

