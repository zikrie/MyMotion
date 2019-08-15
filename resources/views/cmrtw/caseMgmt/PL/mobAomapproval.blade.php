<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('mobAomapproval.title1')</h5>
                     <hr>
                     <div class="form-actions">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                                <label class="control-label">@lang('mobAomapproval.kelulusan')</label>
                                <select class="form-control select" id="hubungan"  onchange="myRemark(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select </option>
                                    <option value="ya">@lang('mobAomapproval.ya')</option>
                                    <option value="tidak">@lang('mobAomapproval.tidak')</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="hideRemark" class="form-group" style="display:none"> 
                                <div class="form-group">
                                    <label class="control-label"><span class="text-danger">*</span>@lang('mobAomapproval.remark')</label>
                                    <input type="text" id="remark" class="form-control" value="" required>
                                </div>
                             </div>
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



