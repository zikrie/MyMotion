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
                                                <label class="control-label">@lang('caseMgmt.attr.rtwcaserefno')</label><br>
                                                <input type="text" id="rtwcaserefno" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.ob_name')</label>
                                                    <input type="text" id="ob_name" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.id_no')</label>
                                                <input type="text" id="id_no" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.phone_number')</label>
                                                    <input type="text" id="phone_number" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.email')</label><br>
                                                    <input type="text" id="phone_number" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.recovery_tool')</label><br>
                                                    <input type="text" id="recovery_tool" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label><br>
                                                    <input type="text" id="remarks" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.treatment_Dr_name')</label><br>
                                                    <input type="text" id="treatment_Dr_name" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.position_name')</label><br>
                                                    <input type="text" id="position_name" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.organisation')</label><br>
                                                    <input type="text" id="organisation" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.recommendation_date')</label><br>
                                                    <input type="date" id="recommendation_date" class="form-control" >
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
            
        
        