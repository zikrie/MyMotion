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
                                                <label class="control-label">@lang('caseMgmt.attr.fce_report')</label><br>
                                                <span class="choosefile"><input type="file" name=""id="" required>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.report_date')</label>
                                                <input type="date" id="report_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.identify_requirements')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('caseMgmt.attr.cm_review')</label>
                                                        <input type="text" id="cm_review" class="form-control">
                                                    </div>
                                                </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
            
        
        