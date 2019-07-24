<div class="p-20">
                <form action="#">
                        <h3 class="card-title">@lang('insuredPerson.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_type')</label>
                                    <select class="form-control">
                                        <option value="">@lang('insuredPerson.attr.new_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.old_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.army_id')</option>
                                        <option value="">@lang('insuredPerson.attr.police_id')</option>
                                        <option value="">@lang('insuredPerson.attr.ssn_id')</option>
                                        <option value="">@lang('insuredPerson.attr.cid')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_no')</label>
                                    <input type="text" id="idNum" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label>
                                    <input type="date" id="dateofbirth" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.race')</label>

                                    <select class="form-control" data-placeholder="Choose a Category"
                                    tabindex="1">
                                    <option value="Malay">@lang('insuredPerson.attr.malay')</option>
                                    <option value="Chinese">@lang('insuredPerson.attr.chinese')</option>
                                    <option value="Indian">@lang('insuredPerson.attr.indian')</option>
                                    <option value="Sabah">Bumiputera Sabah</option>
                                    <option value="Sarawak">Bumiputera Sarawak</option>
                                    <option value="Others">@lang('insuredPerson.attr.others')</option>
                                </select>
                            </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.gender')</label>
                                <select class="form-control">
                                    <option value="Completed">Male</option>
                                    <option value="Not Completed">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.occupation')</label>
                                <input type="text" id="occupation" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address1')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address2')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address3')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.city')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <select class="form-control" data-placeholder="Choose a Category"
                                tabindex="1">
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
                            <label>@lang('insuredPerson.attr.postcode')</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.telNo')</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.mobileNo')</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.email')</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('insuredPerson.attr.citizen')</label>

                            <select class="form-control" data-placeholder="Choose a Category"
                            tabindex="1">
                            <option value="Malay">Warganegara</option>
                            <option value="Chinese">Bumiputera</option>
                        </select>
                    </div>
                    </div>
                    </div>
               
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-actions">
                            <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button>
                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('insuredPerson.save')</button>
                    </div>
                </div>  
                </div>                 
    </form>

</div>
