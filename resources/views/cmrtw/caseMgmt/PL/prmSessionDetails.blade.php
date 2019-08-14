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
                                                <label class="control-label">@lang('caseMgmt.attr.supplier_name')</label><br>
                                                <input type="text" id="supplier_name" class="form-control" >
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.supplier_address')</label><br>
                                                    <input type="text" id="supplier_address" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.prm_date')</label>
                                                <input type="date" id="date" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.start_time')</label><br>
                                                    <input type="date" id="start_time" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.end_time')</label><br>
                                                    <input type="text" id="end_time" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.cost_prm')</label><br>
                                                    <input type="text" id="cost_prm" class="form-control" disabled>
                                                </div>
                                        </div>
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
        