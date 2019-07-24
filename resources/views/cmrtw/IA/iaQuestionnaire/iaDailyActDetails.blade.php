<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.toilet_use')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="toilet1" name="toilet" class="custom-control-input">
                                        <label class="custom-control-label" for="toilet1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="toilet2" name="toilet" class="custom-control-input">
                                        <label class="custom-control-label" for="toilet2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="toilet3" name="toilet" class="custom-control-input">
                                        <label class="custom-control-label" for="toilet3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.feeding')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="feeding1" name="feeding" class="custom-control-input">
                                        <label class="custom-control-label" for="feeding1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="feeding2" name="feeding" class="custom-control-input">
                                        <label class="custom-control-label" for="feeding2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="feeding3" name="feeding" class="custom-control-input">
                                        <label class="custom-control-label" for="customRfeeding3adio6">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.bathing')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bathing1" name="bathing" class="custom-control-input">
                                        <label class="custom-control-label" for="bathing1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bathing2" name="bathing" class="custom-control-input">
                                        <label class="custom-control-label" for="bathing2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bathing3" name="bathing" class="custom-control-input">
                                        <label class="custom-control-label" for="bathing3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.grooming')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="grooming1" name="grooming" class="custom-control-input">
                                        <label class="custom-control-label" for="grooming1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="grooming2" name="grooming" class="custom-control-input">
                                        <label class="custom-control-label" for="grooming2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="grooming3" name="grooming" class="custom-control-input">
                                        <label class="custom-control-label" for="grooming3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.staurs')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="staurs1" name="staurs" class="custom-control-input">
                                        <label class="custom-control-label" for="staurs1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="staurs2" name="staurs" class="custom-control-input">
                                        <label class="custom-control-label" for="staurs2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="staurs3" name="staurs" class="custom-control-input">
                                        <label class="custom-control-label" for="staurs3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.dressing')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="dressing1" name="dressing" class="custom-control-input">
                                        <label class="custom-control-label" for="dressing1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="dressing2" name="dressing" class="custom-control-input">
                                        <label class="custom-control-label" for="dressing2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="dressing3" name="dressing" class="custom-control-input">
                                        <label class="custom-control-label" for="dressing3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.ambulation')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="ambulation1" name="ambulation" class="custom-control-input">
                                        <label class="custom-control-label" for="ambulation1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="ambulation2" name="ambulation" class="custom-control-input">
                                        <label class="custom-control-label" for="ambulation2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="ambulation3" name="ambulation" class="custom-control-input">
                                        <label class="custom-control-label" for="ambulation3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.wheelchair')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="wheelchair1" name="wheelchair" class="custom-control-input">
                                        <label class="custom-control-label" for="wheelchair1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="wheelchair2" name="wheelchair" class="custom-control-input">
                                        <label class="custom-control-label" for="wheelchair2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="wheelchair3" name="wheelchair" class="custom-control-input">
                                        <label class="custom-control-label" for="wheelchair3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.bed_chair')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bed_chair1" name="bed_chair" class="custom-control-input">
                                        <label class="custom-control-label" for="bed_chair1">@lang('caseMgmt.attr.notIndependent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bed_chair2" name="bed_chair" class="custom-control-input">
                                        <label class="custom-control-label" for="bed_chair2">@lang('caseMgmt.attr.independentOther')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bed_chair3" name="bed_chair" class="custom-control-input">
                                        <label class="custom-control-label" for="bed_chair3">@lang('caseMgmt.attr.self')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.bowels')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bowels1" name="bowels" class="custom-control-input">
                                        <label class="custom-control-label" for="bowels1">@lang('caseMgmt.attr.incontinent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bowels2" name="bowels" class="custom-control-input">
                                        <label class="custom-control-label" for="bowels2">@lang('caseMgmt.attr.incontinentTool')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bowels3" name="bowels" class="custom-control-input">
                                        <label class="custom-control-label" for="bowels3">@lang('caseMgmt.attr.needTool')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bowels4" name="bowels" class="custom-control-input">
                                        <label class="custom-control-label" for="bowels4">@lang('caseMgmt.attr.independent')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.bladder')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bladder1" name="bladder" class="custom-control-input">
                                        <label class="custom-control-label" for="bladder1">@lang('caseMgmt.attr.incontinent')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bladder2" name="bladder" class="custom-control-input">
                                        <label class="custom-control-label" for="bladder2">@lang('caseMgmt.attr.incontinentTool')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bladder3" name="bladder" class="custom-control-input">
                                        <label class="custom-control-label" for="bladder3">@lang('caseMgmt.attr.needTool')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bladder4" name="bladder" class="custom-control-input">
                                        <label class="custom-control-label" for="bladder4">@lang('caseMgmt.attr.independent')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.adl_addinfo')</label>
                                    <input type="text" id="addinfo" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

          

