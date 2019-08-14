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
                                                    <label class="control-label">@lang('caseMgmt.attr.discuss_cat')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="discuss_cat1">@lang('caseMgmt.attr.discuss_cat1')</option>
                                                            <option value="discuss_cat2">@lang('caseMgmt.attr.discuss_cat2')</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.rehab_type')</label>
                                                <input type="text" id="rehab_type" class="form-control" disabled>
                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
            
        
        