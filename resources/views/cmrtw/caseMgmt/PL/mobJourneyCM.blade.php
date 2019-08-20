<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     
                     <div class="form-actions">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.journey_report')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="test1">
                                        <label class="custom-control-label" for="test1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.journey_report') </label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="test2">
                                        <label class="custom-control-label" for="test2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <label class="control-label">@lang('caseMgmt.attr.journey_report')</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="test3">
                                        <label class="custom-control-label" for="test3"></label>
                                    </div>
                                </div>
                            </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="control-label">@lang('caseMgmt.attr.verify')</label>
                                <select class="form-control select" id="verify">
                                    <option value="">Please Select </option>
                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                    <option value="no">@lang('caseMgmt.attr.no')</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                <input type="text" id="remarks" class="form-control" value="">
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



