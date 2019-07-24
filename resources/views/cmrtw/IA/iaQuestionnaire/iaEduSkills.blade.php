<div class="form-group">
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.eduLevel')</label>
                    <select class="form-control">
                        <option value="">@lang('ia.attr.noFormal')</option>
                        <option value="">@lang('ia.attr.upsr')</option>
                        <option value="">@lang('ia.attr.srp')</option>
                        <option value="">@lang('ia.attr.spm')</option>
                        <option value="">@lang('ia.attr.cert')</option>
                        <option value="">@lang('ia.attr.diploma')</option>
                        <option value="">@lang('ia.attr.bachelor')</option>
                        <option value="">@lang('ia.attr.others')</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.proQuality')</label>
                    <select class="form-control">
                        <option value="">@lang('ia.attr.yes')</option>
                        <option value="">@lang('ia.attr.no')</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.license')</label>
                    <select class="form-control" name="license" multiple="" class="ui fluid dropdown">
                        <option value="ldl">@lang('ia.attr.ldl')</option>
                        <option value="pdl">@lang('ia.attr.pdl')</option>
                        <option value="cdl">@lang('ia.attr.cdl')</option>
                        <option value="vdl">@lang('ia.attr.vdl')</option>
                        <option value="idp">@lang('ia.attr.idp')</option>
                        <option value="nolicense">@lang('ia.attr.nolicense')</option>
                    </select>
                </div>
            </div>
        </div>
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