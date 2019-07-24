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
                                <label class="control-label">@lang('caseMgmt.attr.treatment_type')</label>
                                <select class="form-control" tabindex="1">
                                    <option value="">Please Select</option>
                                    <option value="operation">@lang('caseMgmt.attr.operation')</option>
                                    <option value="conservative">@lang('caseMgmt.attr.conservative')</option>
                                    <option value="therapy">@lang('caseMgmt.attr.therapy')</option>
                                    <option value="alternative_treatment">@lang('caseMgmt.attr.alternative_treatment')</option>
                                    <option value="others_option">@lang('caseMgmt.attr.others_option')</option>
   
                                    
                                    
                                </select>
                                
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                <input type="text" id="remarks" class="form-control">
                            </div>
                        </div>

                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
</div>


