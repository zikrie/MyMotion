 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                       <h5 class="card-title">@lang('registrationRTW.title1')</h5>
                       <hr>
                       @if(Session::get('messageob')) 
                       <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messageob')}}
                        </div>

                    </div>
                    @elseif (!empty($messageob))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messageob}}
                        </div>
                    </div>
                    @endif

                    <div class="row p-t-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.rtwrefno')</label>
                                <input type="text" class="form-control" id="rtwrefno" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.receivedate')</label>
                                <input type="date" class="form-control" id="receivedate" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.submissiondate')</label>
                                <input type="date" class="form-control" id="receivedate" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.socregoffice')</label>
                                <input type="text" id="name" class="form-control" id="socregoffice" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.socoffice')</label>
                                <input type="text" id="name" class="form-control" id="socoffice" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.sourceoff')</label>
                                <input type="text" id="name" class="form-control" id="sourceoff" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.hospital')</label>
                                <input type="text" id="hospital" class="form-control" id="hospital" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.spname')</label>
                                <input type="text" id="spname" class="form-control" id="spname" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.empname')</label>
                                <input type="text" id="empname" class="form-control" id="empname" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.refphy')</label>
                                <input type="text" id="refphy" class="form-control" id="refphy" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.refdoc')</label>
                                <input type="text" id="refdoc" class="form-control" id="refdoc" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.personcharge')</label>
                                <input type="text" id="personcharge" class="form-control" id="personcharge" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.phoneno')</label>
                                <input type="text" id="phoneno" class="form-control" id="phoneno" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.docphone')</label>
                                <input type="text" id="docphone" class="form-control" id="docphone" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.phoneno')</label>
                                <input type="text" id="phoneno" class="form-control" id="phoneno" value="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.docemel')</label>
                                <input type="text" id="docemel" class="form-control" id="docemel" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.docemeltheraphy')</label>
                                <input type="text" id="docemeltheraphy" class="form-control" id="docemeltheraphy" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.emailDoc')</label>
                                <input type="text" id="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">

                                <input type="hidden" id="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRtw.attr.refpurpose')</label>
                                <select class="form-control select" id="reference" name='reference' onchange="myFunctionOther(this.options[this.selectedIndex].value)">
                                    <option>@lang('registrationRtw.attr.pleaseselect')</option>
                                    <option value="rehab">@lang('registrationRtw.attr.rehab')</option>
                                    <option value="peralatanpemulihan">@lang('registrationRtw.attr.recoveryequipment')</option>
                                    <option value="jobplacement">@lang('registrationRtw.attr.jobplacement')</option>
                                    <option value="others">@lang('registrationRtw.attr.others')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="hideOthers" class="form-group" style="display:none">

                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.otherpurpose')</label>
                                    <input class="form-control"  type="text"  value="" id="reference">
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <h5 class="card-title">@lang('registrationRtw.title4')</h5>
                    <hr>

                    <div class="row p-t-20">
                        <div class="col-md-12">
                         <div class="form-group">
                            <label class="control-label">@lang('registrationRtw.attr.name')<span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control"  value="@if(!empty($casertw)){{ $casertw->name }} @endif" required>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRTW.attr.id_type')<span class="text-danger">*</span></label>
                            <select class="form-control" value="@if(!empty($casertw)){{ $casertw->idtype }} @endif" required>
                                <option>@lang('registrationRtw.attr.pleaseselect')</option>
                                @foreach($idtype as $id)
                                @if (!empty($casertw) && $id->refcode == $casertw->idtype)
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
                            <label class="control-label">@lang('registrationRTW.attr.id_no')<span class="text-danger">*</span></label>
                            <input required type="text" id="idNum" class="form-control" value="@if(!empty($casertw)){{ $casertw->idno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRtw.attr.dateOfBirth')<span class="text-danger">*</span></label>
                            @if(!empty($casertw) && $casertw->dob !='')
                            <input type="date" id="dob" name="dob" value="{{substr($casertw->dob,0,4)}}-{{substr($casertw->dob,4,2)}}-{{substr($casertw->dob,6,2)}}" class="form-control clearFields">
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
                                @if (!empty($casertw) && $casertw->race == $id->refcode)
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
                                @if (!empty($casertw) && $casertw->gender == 'F')
                                <option value="F" selected>Female</option>
                                <option value="M">Male</option>
                                @elseif (!empty($casertw) && $casertw->gender == 'M')
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
                            <label class="control-label">@lang('registrationRtw.attr.occupation')</label>
                            @if(!empty($casertw) && $casertw->occupation != '')
                            <input type="text" id="occupation" name="occupation" value="{{ $casertw->occupation }}" class="form-control clearFields">
                            @else
                            <input type="text" id="occupation" name="occupation" value="" class="form-control clearFields">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('registrationRtw.attr.add')<span class="text-danger">*</span></label>
                            @if(!empty($casertw) && $casertw->add1 != '')
                            <input type="text" id="add1" name="add1" value="{{ $casertw->add1 }}" class="form-control clearFields">
                            @else
                            <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            @if(!empty($casertw) && $casertw->add2 != '')
                            <input type="text" id="add2" name="add2" value="{{ $casertw->add2 }}" class="form-control clearFields">
                            @else
                            <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                        </div>
                    </div>
                </div>
            <div class='row'>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('insuredPerson.attr.city')<span class="text-danger">*</span></label>
                        @if(!empty($obprofile) && $obprofile->city != '')
                        <input type="text" id="city" name="city" value="{{ $obprofile->city }}" class="form-control clearFields">
                        @else
                        <input type="text" id="city" name="city" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('insuredPerson.attr.state')<span class="text-danger">*</span></label>
                        <select name='state' id='state' class='form-control'>
                            @foreach($state as $s)
                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
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
                        <label>@lang('registrationRtw.attr.postcode')<span class="text-danger">*</span></label>
                        @if(!empty($casertw) && $casertw->postcode != '')
                        <input type="text" id="postcode" name="postcode" value="{{ $casertw->postcode }}" class="form-control clearFields">
                        @else
                        <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRtw.attr.pobox')</label>
                        @if(!empty($obprofile) && $obprofile->pobox != '')
                        <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                        @else
                        <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRtw.attr.lockedbag')</label>
                        @if(!empty($obprofile) && $obprofile->lockedbag != '')
                        <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                        @else
                        <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRtw.attr.wdt')</label>
                        @if(!empty($obprofile) && $obprofile->wdt != '')
                        <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                        @else
                        <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('insuredPerson.attr.telNo')</label>
                        @if(!empty($obprofile) && $obprofile->telno != '')
                        <input type="text" id="telno" name="telno" value="{{ $obprofile->telno }}" class="form-control clearFields">
                        @else
                        <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('insuredPerson.attr.mobileNo')</label>
                        @if(!empty($obprofile) && $obprofile->mobileno != '')
                        <input type="text" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" class="form-control clearFields">
                        @else
                        <input type="text" id="mobileno" name="mobileno" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('insuredPerson.attr.email')</label>
                        @if(!empty($obprofile) && $obprofile->email != '')
                        <input type="email" id="email" name="email" value="{{ $obprofile->email }}" class="form-control clearFields">
                        @else
                        <input type="email" id="email" name="email" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRtw.attr.citizen')</label>
                        {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }} @endif" class="form-control"> --}}
                        <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                            <option>@lang('registrationRtw.attr.pleaseselect')</option>
                            @foreach($national as $N)
                            @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                            <option value="{{$N->refcode}}" selected>{{$N->descen}}</option>
                            @else
                            <option value="{{$N->refcode}}">{{$N->descen}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <h4 class="card-title">@lang('registrationRTW.title2')</h4>
            <hr>
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRTW.attr.empcode')</label>
                        <input type="text" id="empcode" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRTW.attr.emptype')</label>
                        <select class="form-control">
                            <option value="">@lang('registrationRtw.attr.pleaseselect')</option>
                            <option value="statutory">@lang('caseMgmt.attr.statutory')</option>
                            <option value="private">@lang('caseMgmt.attr.private')</option>
                            <option value="government">@lang('caseMgmt.attr.government')</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRTW.attr.compname')</label>
                        <input type="text" id="name" class="form-control" value="@if(!empty($casertw)){{ $casertw->empname }} @endif">
                    </div>
                </div>
            </div>
            <div class="row p-t-20">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.address')</label>
                        <input type="text" class="form-control"  value="@if(!empty($casertw)){{ $casertw->empadd1 }} @endif">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">

                        <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empadd2 }} @endif">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">

                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.postcode')</label>
                        <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->emppostcode }} @endif">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.city')</label>
                        <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empcity}} @endif">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('registrationRTW.attr.state')</label>
                        <select name='state' id='state' class='form-control'>
                            <option>@lang('registrationRtw.attr.pleaseselect')</option>
                            @foreach($state as $s)
                            @if(!empty($casertw) && $casertw->statecode == $s->refcode)
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
                        <label>@lang('registrationRtw.attr.pobox')</label>
                        @if(!empty($obprofile) && $obprofile->pobox != '')
                        <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                        @else
                        <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRtw.attr.lockedbag')</label>
                        @if(!empty($obprofile) && $obprofile->lockedbag != '')
                        <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                        @else
                        <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRtw.attr.wdt')</label>
                        @if(!empty($obprofile) && $obprofile->wdt != '')
                        <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                        @else
                        <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.telNo')</label>
                        <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->emptelno }} @endif">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('insuredPerson.attr.mobileNo')</label>
                        @if(!empty($obprofile) && $obprofile->mobileno != '')
                        <input type="text" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" class="form-control clearFields">
                        @else
                        <input type="text" id="mobileno" name="mobileno" value="" class="form-control clearFields">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('registrationRTW.attr.email')</label>
                        <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empemail }} @endif">
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

<script type="text/javascript">
    function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }

    function myFunction(aval) {
        if (aval == "others") {
            $('#hideOthers').show();   
        }
        else {
            $('#hideOthers').hide(); 
        }
    }
</script>