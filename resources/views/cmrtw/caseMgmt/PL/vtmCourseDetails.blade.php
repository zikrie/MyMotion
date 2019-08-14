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
                                                <label class="control-label">@lang('caseMgmt.attr.course_name')</label><br>
                                                <input type="text" id="course_name" class="form-control" >
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.course_period')</label><br>
                                                    <input type="text" id="course_period" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.recom_date_course')</label><br>
                                                    <input type="text" id="course_period" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.start_date')</label><br>
                                                    <input type="date" id="start_date" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.end_date')</label><br>
                                                    <input type="date" id="end_date" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.training_name')</label>
                                                <input type="text" id="course_period" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.vtm_item')</label><br>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                            <option value="">Please Select</option>
                                                            <option value="vtm_item1">@lang('caseMgmt.attr.vtm_item1')</option>
                                                            <option value="vtm_item2">@lang('caseMgmt.attr.vtm_item2')</option>
                                                            <option value="vtm_item3">@lang('caseMgmt.attr.vtm_item3')</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.cost_prm')</label><br>
                                                    <input type="text" id="cost_prm" class="form-control">
                                                </div>
                                        </div>
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
        