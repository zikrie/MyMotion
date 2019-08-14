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
                                                            <label class="control-label">@lang('caseMgmt.attr.address')</label>
                                                            <input type="text" id="address" class="form-control">
                                                        </div>
                                                    </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('insuredPerson.attr.postcode')</label>
                                                        <input type="text"  id="postcode" class="form-control">
                                                 </div>
                                                    </div>
                                                <div class="col-md-4">
                                                     <div class="form-group">
                                                         <label>@lang('caseMgmt.attr.phone_home')</label>
                                                         <input type="text" class="form-control">
                                                      </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                         <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.phone_mobile')</label>
                                                         <input type="text" class="form-control">
                                                     </div>
                                                 </div>
                                                <div class="col-md-4">
                                                             <div class="form-group">
                                                             <label>@lang('insuredPerson.attr.email')</label>
                                                             <input type="text" class="form-control">
                                                            </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.course_period')</label>
                                                        <select class="form-control" tabindex="1">
                                                                {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
                                                                <option value="course_period1">@lang('caseMgmt.attr.course_period1')</option>
                                                                <option value="course_period2">@lang('caseMgmt.attr.course_period2')</option>
                                                                
                                                            </select>
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.month')</label>
                                                        <input type="text" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.payment_type')</label>
                                                        <select class="form-control" tabindex="1">
                                                                {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
                                                                <option value="payment_type1">@lang('caseMgmt.attr.payment_type1')</option>
                                                                <option value="payment_type2">@lang('caseMgmt.attr.payment_type2')</option>
                                                                <option value="payment_type3">@lang('caseMgmt.attr.payment_type3')</option>
                                                                
                                                            </select>
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.overall_cost')</label>
                                                        <input type="text" class="form-control">
                                                       </div>
                                                </div>
                                                {{-- <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.attachment')</label><br>
                                                        <input type="file">
                                                       </div>
                                                </div> --}}
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.vocarefno')</label><br>
                                                        <input type="text" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.assigned_date')</label><br>
                                                        <input type="date" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.person_incharge')</label><br>
                                                        <input type="text" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.pic_contact')</label><br>
                                                        <input type="text" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.expected_date1')</label><br>
                                                        <input type="date" class="form-control">
                                                       </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.expected_date2')</label><br>
                                                        <input type="date" class="form-control">
                                                       </div>
                                                </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    


            

