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
                                                <label class="control-label">@lang('caseMgmt.attr.gl_cancel')</label><br>
                                                <select name="select_opt" id="select_opt" class="form-control" onchange="showField890(this.options[this.selectedIndex].value)" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="gl_cancel1">@lang('caseMgmt.attr.gl_cancel1')</option>
                                                        <option value="gl_cancel2">@lang('caseMgmt.attr.gl_cancel2')</option>
                                                        <option value="gl_cancel3">@lang('caseMgmt.attr.gl_cancel3')</option>
                                                        <option value="gl_cancel4">@lang('caseMgmt.attr.gl_cancel4')</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="90"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </form>
                </div>
             </div>
        </div>
     </div>
        
        
        
            
        
        