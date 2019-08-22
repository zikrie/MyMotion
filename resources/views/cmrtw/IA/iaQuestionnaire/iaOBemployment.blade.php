<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <label class="control-label">@lang('ia.attr.jobInterest')</label>
                <div class="row">
                    <div class="col-sm-3 nopadding">
                        <div class="form-group">
                            <label class="control-label">@lang('ia.attr.job') <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="job" name="job[]" value="" placeholder="Job of interest" required>
                        </div>
                    </div>
                    <div class="col-sm-3 nopadding">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRTW.attr.state') <span class="text-danger">*</span></label>
                                <select class="form-control" tabindex="1" required>
                                    <option value="Johor">Please Select State</option>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="NegeriSembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    <option value="KualaLumpur">W.P Kuala Lumpur</option>
                                    <option value="Labuan">W.P Labuan</option>
                                    <option value="Putrajaya">W.P Putrajaya</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-sm-3 nopadding">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRTW.attr.city') <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="city" name="city[]" value="" placeholder="city" required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="education_fields"></div>
            </div>
        </div>
    </div>
</div>