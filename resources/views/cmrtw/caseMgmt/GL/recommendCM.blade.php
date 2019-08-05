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
                                                    <label class="control-label">@lang('caseMgmt.attr.action')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="proceed">@lang('caseMgmt.attr.proceed')</option>
                                                        <option value="close">@lang('caseMgmt.attr.close')</option>
                                                        <option value="query_report">@lang('caseMgmt.attr.query_report')</option>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    



                

