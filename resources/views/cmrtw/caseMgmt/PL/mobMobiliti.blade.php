<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                       <h5 class="card-title">@lang('mobMobiliti.title1')</h5>
                       <hr>
                       <div class="form-actions">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">@lang('mobMobiliti.keperluanmobiliti')</label>
                                    <select class="form-control select" id="mobiliti"  onchange="mobiliti(this.options[this.selectedIndex].value)">
                                        <option value="">Please Select </option>
                                        <option value="kenderaanperkeso">@lang('mobMobiliti.kenderaanperkeso')</option>
                                        <option value="tiketpenerbangan">@lang('mobMobiliti.tiketpenerbangan')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                            <div id="hidekenderaanperkeso" class="form-group" style="display:none">
                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.lain2')</label>
                                    <input class="form-control"  type="text"  value="" id="kenderaanperkeso">
                                </div>
                            </div>
                            <div id="hidetiketpenerbangan" class="form-group" style="display:none">
                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.lain2')</label>
                                    <input class="form-control"  type="text"  value="" id="tiketpenerbangan">
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



