<div class="form-group">    
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.work')</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="yes1" name="yes1" class="custom-control-input">
                        <label class="custom-control-label" for="yes1">@lang('caseMgmt.attr.yes')</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="no1" name="yes1" class="custom-control-input">
                        <label class="custom-control-label" for="no1">@lang('caseMgmt.attr.no')</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.multiple')</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="multiple" name="yes2" class="custom-control-input">
                        <label class="custom-control-label" for="multiple">@lang('ia.attr.multiple')</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="yes11" name="yes2" class="custom-control-input">
                        <label class="custom-control-label" for="yes11">@lang('caseMgmt.attr.yes')</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="no11" name="yes2" class="custom-control-input">
                        <label class="custom-control-label" for="no11">@lang('caseMgmt.attr.no')</label>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="root">
            <div class="row p-t-20">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRTW.attr.name')</label>
                        <input type="text" id="name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row p-t-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.postal_address1')</label>
                        <input type="text" class="form-control"  >
                    </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>@lang('registrationRTW.attr.postal_address2')</label>
                   <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>@lang('registrationRTW.attr.postal_address3')</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>@lang('registrationRTW.attr.city')</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label class="control-label">@lang('registrationRTW.attr.state')</label>
                    <select class="form-control" tabindex="1">
                    {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.postcode')</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.telNo')</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.mobileNo')</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.email')</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
</div>