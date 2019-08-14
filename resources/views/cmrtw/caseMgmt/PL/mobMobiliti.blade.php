<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h5 class="card-title">@lang('mobMobiliti.title1')</h5>
                     <hr>
                     <div class="form-actions">

                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="control-label">@lang('mobMobiliti.keperluanmobiliti')</label>
                                <select class="form-control select" id="mobiliti"  onchange="myMobiliti(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select </option>
                                    <option value="kenderaanperkeso">@lang('mobMobiliti.kenderaanperkeso')</option>
                                    <option value="tiketpenerbangan">@lang('mobMobiliti.tiketpenerbangan')</option>
                                    <option value="taxi">@lang('mobMobiliti.taxi')</option>
                                </select>
                            </div>
                            
                        </div>

                        <div id="hidekenderaanperkeso" class="form-group" style="display:none">
                            <div class="form-group">
                                <h5 class="card-title">@lang('mobMobiliti.title2')</h5>
                                <hr>
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobMobiliti.destinasidari')</label>
                                <select class="form-control select" id="mobiliti">
                                    <option value="">Please Select </option>
                                 
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('mobMobiliti.destinasike')</label>
                                <select class="form-control select" id="mobiliti">
                                    <option value="">Please Select </option>
                                 
                                </select>
                            </div>
                            
                        </div>
                            </div>
                        </div>


                        <div id="hidetiketpenerbangan" class="form-group" style="display:none">
                            <div class="form-group">
                                <h5 class="card-title">@lang('mobMobiliti.title3')</h5>
                                <hr>
                            </div>
                        </div>
                        <div id="hidetaxi" class="form-group" style="display:none">
                            <div class="form-group">
                                <h5 class="card-title">@lang('mobMobiliti.title4')</h5>
                                <hr>
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



