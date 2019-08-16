<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                     <h4 class="card-title">@lang('registrationRTW.title1')</h4>
                     <hr>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.refreceivedate')</label>
                                <input type="date" class="form-control" id="receivedate" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRtw.attr.reportby')</label>
                                <select class="form-control select" id="reportby" name='reportby' onchange="myFunctionReport(this.options[this.selectedIndex].value)">

                                    <option value="insuredperson">@lang('registrationRtw.attr.insuredperson')</option>
                                    <option value="employer">@lang('registrationRtw.attr.complain')</option>
                                    <option value="Others">@lang('registrationRtw.attr.others')</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="hideReport" class="form-group" style="display:none">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.name')</label>
                                <input class="form-control"  type="text"  value="" id="reportby">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.telNo')</label>
                                <input class="form-control"  type="text"  value="" id="telno">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.email')</label>
                                <input class="form-control"  type="text"  value="" id="email">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.relation')</label>
                                <input class="form-control"  type="text"  value="" id="relation">
                            </div>
                        </div>
                    </div>
                    <div id="hideEmployer" class="form-group" style="display:none">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.name')</label>
                                <input class="form-control"  type="text"  value="" id="reportby">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.telNo')</label>
                                <input class="form-control"  type="text"  value="" id="telno">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">@lang('registrationRtw.attr.email')</label>
                                <input class="form-control"  type="text"  value="" id="email">
                            </div>
                        </div>
                    </div>


                    <h4 class="card-title">@lang('registrationRTW.title4')</h4>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.name')<span class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control"  value="{{session::get('name')}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.id_type')<span class="text-danger">*</span></label>
                                <input class="form-control" value="{{session::get('idtype')}}" disabled>
                                {{--   <option>@lang('registrationRtw.attr.pleaseselect')</option> --}}
                                     {{--    <option value="">Please Select </option>
                                        <option value="newic">@lang('rtw_eligibility.attr.new_ic')</option>
                                        <option value="ssn">@lang('rtw_eligibility.attr.ssn_id')</option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_no')<span class="text-danger">*</span></label>
                                    <input required type="text" id="idNum" class="form-control" value="{{session::get('idno')}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.dateOfBirth')<span class="text-danger">*</span></label>
                                    @if(!empty($data) && $data->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($data->dob,0,4)}}-{{substr($data->dob,4,2)}}-{{substr($data->dob,6,2)}}" class="form-control clearFields">
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control clearFields">
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.race')<span class="text-danger">*</span></label>
                                    <select class="form-control clearFields" name="race" id="race"> 

                                        <option>@lang('registrationRtw.attr.pleaseselect')</option>
                                        @foreach($race as $id)
                                        @if (!empty($data) && $data->race == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.gender')<span class="text-danger">*</span></label>
                                    <select class="form-control clearFields" name="gender">
                                        <option>@lang('registrationRtw.attr.pleaseselect')</option>
                                        @if (!empty($data) && $data->gender == 'F')
                                        <option value="F" selected>Female</option>
                                        <option value="M">Male</option>
                                        @elseif (!empty($data) && $data->gender == 'M')
                                        <option value="F">Female</option>
                                        <option value="M" selected>Male</option>
                                        @else
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.occupation')<span class="text-danger">*</span></label>
                                    <input type="text" id="occupation" class="form-control" value="@if(!empty($data)){{ $data->occupation }} @endif">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.address')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="@if(!empty($data)){{ $data->add1 }} @endif" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" value="@if(!empty($data)){{ $data->add2 }} @endif">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.city')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="city" value="@if(!empty($data)){{ $data->city }} @endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.state')<span class="text-danger">*</span></label>
                                <select name='state' id='state' class='form-control'>
                                    <option>Please Select</option>
                                    @foreach($state as $s)
                                    @if(!empty($data) && $data->statecode == $s->refcode)
                                    <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                    @else
                                    <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.postcode')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="postcode" value="@if(!empty($data)){{ $data->postcode }} @endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRtw.attr.pobox')</label>
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRtw.attr.lockedbag')</label>
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('registrationRtw.attr.wdt')</label>
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRtw.attr.addresssame')</label>
                                <select class="form-control select" id="reference" name='address' onchange="myAddress(this.options[this.selectedIndex].value)">
                                    <option value="yes">@lang('registrationRtw.attr.yes')</option>
                                    <option value="no">@lang('registrationRtw.attr.no')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden">
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div id="hideAddress" class="form-group" style="display:none">

                               <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('registrationRTW.attr.add')<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.telNo')</label>
                            <input type="text" class="form-control" name="telno" value="@if(!empty($data)){{ $data->telno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.mobileNo')<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="mobileno" value="@if(!empty($data)){{ $data->mobileno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="mobileno">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.email')</label>
                            <input type="text" name="email" class="form-control"  value="@if(!empty($data)){{ $data->email }} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRTW.attr.citizen')</label>

                            <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                <option>Please Select</option>
                                @foreach($national as $N)
                                @if (!empty($data) && $data->nationality == $N->refcode)
                                <option value="{{$N->refcode}}" selected>{{$N->descen}}</option>
                                @else
                                <option value="{{$N->refcode}}">{{$N->descen}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="mobileno">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">@lang('registrationRtw.attr.unemployment')<span class="text-danger">*</span></label>
                            <div class="row">
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
                    </div>

                </div>
                <div class="form-actions">
                   <button type="submit" class="btn btn waves-effect waves-light btn-success">
                   SAVE & CONTINUE</button>
                   <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                   <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
               </div>

           </div>
       </form>
   </div>
</div>
</div>
</div>



