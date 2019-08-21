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
                                                    <label class="control-label">@lang('caseMgmt.attr.agency_name')</label>
                                                    <input type="text" id="agency_name" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.agency_address')</label>
                                                <input type="text" id="supplier_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('insuredPerson.attr.postcode')</label>
                                                    <input type="text" id="postcode" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('insuredPerson.attr.city')</label><br>
                                                    <input type="text" id="city" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('insuredPerson.attr.state')</label><br>
                                                    <input type="text" id="state" class="form-control" placeholder="RM">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.for_attention')</label><br>
                                                    <input type="text" id="for_attention" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.desc_condition')</label><br>
                                                    <input type="text" id="desc_condition" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.reference')</label><br>
                                                    <input type="text" id="reference" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.printed_date')</label><br>
                                                    <input type="text" id="printed_date" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label><br>
                                                    <input type="text" id="casemgr_name" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.phone_number')</label><br>
                                                    <input type="text" id="phone_number" class="form-control" >
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.business_type_ob')</label><br>
                                                    <span class="choosefile"><input type="file" name=""id="" required>
                                                    </span>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
</div>

        
    
        
            
        
        