<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                    
                     <div class="form-actions">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.approval')</label>
                                <select class="form-control select" id="hubungan"  onchange="myRemark(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select </option>
                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                    <option value="no">@lang('caseMgmt.attr.no')</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="hideRemark" class="form-group" style="display:none"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')<span class="text-danger">*</span></label>
                                    <input type="text" id="remarks" class="form-control" value="" required>
                                </div>
                             </div>
                        </div>
                    </div>



                        {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        SAVE & CONTINUE</button>
                        <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                        <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



