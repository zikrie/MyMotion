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
                                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                                <select class="form-control" tabindex="1">
                                                        {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
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
                                                    <label class="control-label">@lang('insuredPerson.attr.city')</label>
                                                    <input type="text" id="city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('caseMgmt.attr.supplier_list')</label>
                                                        <input type="text" id="supplier_list" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('insuredPerson.attr.postcode')</label>
                                                        <input type="text"  id="postcode" class="form-control" disabled>
                                                 </div>
                                                    </div>
                                                <div class="col-md-4">
                                                     <div class="form-group">
                                                         <label>@lang('insuredPerson.attr.telNo')</label>
                                                         <input type="text" class="form-control" disabled>
                                                      </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                         <div class="form-group">
                                                        <label>@lang('insuredPerson.attr.telNo')</label>
                                                         <input type="text" class="form-control" disabled>
                                                     </div>
                                                 </div>
                                                <div class="col-md-4">
                                                             <div class="form-group">
                                                             <label>@lang('insuredPerson.attr.email')</label>
                                                             <input type="text" class="form-control" disabled>
                                                            </div>
                                                </div>

                                                    <div class="col-md-4">
                                                             <div class="form-group">
                                                             <label>@lang('caseMgmt.attr.start_date')</label>
                                                              <input type="date" class="form-control" disabled>
                                                          </div>
                                                                    </div>
                                                    <div class="col-md-4">
                                                             <div class="form-group">
                                                             <label>@lang('caseMgmt.attr.end_date')</label>
                                                             <input type="date" class="form-control" disabled>
                                                              </div>
                                                      </div>

                                                    <div class="col-md-4">
                                                            <div class="form-group">
                                                          <label>@lang('caseMgmt.attr.justification')</label>
                                                         <input type="text" class="form-control">
                                                            </div>
                                                     </div>
                                    
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    


            

