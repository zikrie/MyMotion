<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h4 class="card-title">Defaulted/Rejected Case Closure Information</h4>
                     <hr>
                     <div class="form-actions">
                        <div class="row p-t-20">
                            <div class="col-md-4"> 
                                 <div class="form-group">          
                                        <label class="control-label">@lang('caseclosure.status') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" onchange="myDefaulted(this.options[this.selectedIndex].value)" required>
                                            <option value="">Please Select</option>
                                            <option value="sebab_defaulted">@lang('caseclosure.attr.sebab_defaulted')</option>
                                            <option value="sebab_rejected">@lang('caseclosure.attr.sebab_rejected')</option>
                                        </select> 
                                    </div>
                                </div>  
                                <div class="col-md-4">   
                                    <div id="hidesebab_defaulted" class="form-group" style="display:none">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.hospital_name')</label>
                                            <input class="form-control"  type="text"  value="" id="hospital_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">New Identification No.<span class="text-danger">*</span></label>
                                    <input type="text" id="ic" class="form-control" value="">
                                </div>
                            </div>
                       
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" value="">
                                </div>
                            </div>
                      
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Telephone No.<span class="text-danger">*</span></label>
                                    <input type="text" id="telno" class="form-control" value="">
                                </div>
                            </div>
                       
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        SAVE & CONTINUE</button>
                        <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                        <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
function myDefaulted(aval) 
    {
        if (aval == "sebab_defaulted") 
        {
            $('#hidesebab_defaulted').show();
        } 
        else
        {
            $('#hidesebab_defaulted').hide();
        }
    }

</script>
