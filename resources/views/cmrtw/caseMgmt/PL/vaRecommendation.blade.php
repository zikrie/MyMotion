<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                       
                       <div class="form-actions">
                           <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.des_interest')</label>
                                <textarea class="form-control" rows="10" type="textarea"  id="jenispersonaliti3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.recommendation')</label>
                                    <select class="form-control select" id="recommendation"  onchange="myFunctionPengesyoran(this.options[this.selectedIndex].value)">
                                        <option value="">Please Select </option>
                                        <option value="voc_training">@lang('caseMgmt.attr.voc_training')</option>
                                        <option value="job_placement">@lang('caseMgmt.attr.job_placement')</option>
                                        <option value="close_case">@lang('caseMgmt.attr.close_case')</option>
                                        <option value="other">@lang('caseMgmt.attr.other')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="hidePengesyoran" class="form-group" style="display:none">

                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                    <input class="form-control"  type="text"  value="" id="specify">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.casemgr_name')</label>
                                    <input type="text" id="casemgr_name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.recommendation_date')</label>
                                    <input type="date" id="recommendation_date" class="form-control" value="">
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



