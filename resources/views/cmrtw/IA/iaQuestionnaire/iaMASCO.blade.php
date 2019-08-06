<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.mainGroup') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="">Rujuk Senarai MASCO Kod 2008</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.subMainGroup')</label>
                <select class="form-control">
                    <option value="" >Please select</option>
                    <option value="">Rujuk Senarai MASCO</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.subGroup')</label>
                <select class="form-control">
                    <option value="" >Please select</option>
                    <option value="">Rujuk Senarai MASCO</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.catTypeOSI') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="">select OSI</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.catIndustry') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="">select industry</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.subCatIndustry')</label>
                <select class="form-control">
                    <option value="" >Please select</option>
                    <option value="">select sub industry</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.noDays') <span class="text-danger">*</span></label>
                <input type="text" id="noDays" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.workTime') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="">@lang('ia.attr.normal')</option>
                    <option value="">@lang('ia.attr.shift')</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.ot') <span class="text-danger">*</span></label>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="yes12" name="yes3" class="custom-control-input">
                    <label class="custom-control-label" for="yes12">@lang('caseMgmt.attr.yes')</label>
                </div>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="no12" name="yes3" class="custom-control-input">
                    <label class="custom-control-label" for="no12">@lang('caseMgmt.attr.no')</label>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.noHours') <span class="text-danger">*</span></label>
                <input type="text" id="noHours" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.salary') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="">@lang('ia.attr.monthly')</option>
                    <option value="">@lang('ia.attr.daily')</option>
                </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.latestSal') <span class="text-danger">*</span></label>
                <input type="text" id="latestSal" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.workHistory') <span class="text-danger">*</span></label>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="yes13" name="yes4" class="custom-control-input">
                    <label class="custom-control-label" for="yes13">@lang('caseMgmt.attr.yes')</label>
                </div>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="no13" name="yes4" class="custom-control-input">
                    <label class="custom-control-label" for="no13">@lang('caseMgmt.attr.no')</label>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.inMC') <span class="text-danger">*</span></label>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="yes14" name="yes5" class="custom-control-input">
                    <label class="custom-control-label" for="yes14">@lang('caseMgmt.attr.yes')</label>
                </div>
                <div class="custom-control custom-radio" required>
                    <input type="radio" id="no14" name="yes5" class="custom-control-input">
                    <label class="custom-control-label" for="no14">@lang('caseMgmt.attr.no')</label>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.paymentStatus') <span class="text-danger">*</span></label>
                <select class="form-control" required>
                    <option value="" >Please select</option>
                    <option value="full">@lang('ia.attr.fullpay')</option>
                    <option value="half">@lang('ia.attr.halfpay')</option>
                    <option value="nopay">@lang('ia.attr.nopay')</option>
                </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-6">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.workScope') <span class="text-danger">*</span></label>
                <textarea name="workScope" id="workScope" rows="6" class="form-control" required></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">   
                <label for="example-text-input" class="col-form-label">@lang('ia.attr.remarks')</label>
                <textarea name="remarks" id="remarks" rows="6" class="form-control"></textarea>
        </div>
    </div>
</div>
