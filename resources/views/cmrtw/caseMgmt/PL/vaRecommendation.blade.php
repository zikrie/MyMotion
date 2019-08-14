<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                       
                       <div class="form-actions">
                           <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('vaRecommendation.huraian')</label>
                                <textarea class="form-control" rows="10" type="textarea"  id="jenispersonaliti3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.pengesyoran')</label>
                                    <select class="form-control select" id="pengesyoran"  onchange="myFunctionPengesyoran(this.options[this.selectedIndex].value)">
                                        <option value="">Please Select </option>
                                        <option value="latihanvokasional">@lang('vaRecommendation.latihanvokasional')</option>
                                        <option value="penempatanpekerjaan">@lang('vaRecommendation.penempatanpekerjaan')</option>
                                        <option value="tutupkes">@lang('vaRecommendation.tutupkes')</option>
                                        <option value="lain2">@lang('vaRecommendation.lain2')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="hidePengesyoran" class="form-group" style="display:none">

                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.lain2')</label>
                                    <input class="form-control"  type="text"  value="" id="lain2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.namacm')</label>
                                    <input type="text" id="namacm" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('vaRecommendation.tarikhpengesyoran')</label>
                                    <input type="date" id="tarikhpengesyoran" class="form-control" value="">
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



