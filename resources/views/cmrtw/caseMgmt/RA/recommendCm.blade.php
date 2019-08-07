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
                                        <label class="control-label">@lang('caseMgmt.attr.total_claim')</label>
                                         <input type="text" id="total_claim" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.recommendation')</label>
                                        <select class="form-control" required>
                                                <option value="">Please Select</option>
                                                <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                <option value="no">@lang('caseMgmt.attr.no')</option>
                                                
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                        <input type="date" id="remarks" class="form-control">
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.recommendation_date')</label>
                                        <input type="date" id="recommendation_date" class="form-control">
                                    </div>
                                </div>      
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.recommended_by')</label>
                                            <input type="text" id="recommended_by" class="form-control">
                                        </div>
                                    </div>   
                                
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
              
    
    