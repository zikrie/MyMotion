<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                           
                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.rtw_status')</label>
                                        <select name="select_opt" id="select_opt" class="form-control" required> 
                                            <option value="">Please Select</option>
                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.rtw_date')</label>
                                        <input type="date" id="rtw_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.hierarchy_rtw')</label>
                                        <select name="select_opt" id="select_opt" class="form-control" required> 
                                                <option value="">Please Select</option>
                                                <option value="hiera1">@lang('caseMgmt.attr.hiera1')</option>
                                                <option value="hiera2">@lang('caseMgmt.attr.hiera2')</option>
                                                <option value="hiera3">@lang('caseMgmt.attr.hiera3')</option>
                                                <option value="hiera4">@lang('caseMgmt.attr.hiera4')</option>
                                            </select>
                                    </div>
                                </div>
                                  
                                  
    
    
    
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
              
    
    