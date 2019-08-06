<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.plan_type')</label>
                                                <input type="text" id="plan_type" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.gl_number')</label>
                                                    <input type="text" id="gl_number" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.gl_type')</label>
                                                    <input type="text" id="gl_type" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.service_type')</label>
                                                    <input type="text" id="service_type" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.ob_recovery')</label>
                                                    <input type="text" id="ob_recovery" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.valid_from')</label>
                                                    <input type="date" id="valid_from" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.valid_to')</label>
                                                    <input type="date" id="valid_to" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.advanced_justification')</label>
                                                    <input type="text" id="advanced_justification" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.prepared_by')</label>
                                                    <input type="text" id="prepared_by" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.prepared_for')</label>
                                                    <input type="text" id="prepared_for" class="form-control" disabled>
                                                </div>
                                        </div>

                                      
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   


            

