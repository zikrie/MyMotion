<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body"> 
                <form class="form">
                    <h4 class="card-title">@lang('appointment.title')</h4>

                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    <br><br>

                    <h4 class="card-title"></h4>
                        
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('appointment.attr.date')<span class="text-danger">*</span></label>
                                <input class="form-control" type="date"  id="appointmentDate">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('appointment.attr.time')<span class="text-danger">*</span></label>
                                <input class="form-control" type="time"  id="appointmentTime">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('appointment.attr.location')<span class="text-danger">*</span></label>
                                <select class="form-control select " id="appointmentLocation" name='appointmentLocation' onchange="appointmentFunc(this.options[this.selectedIndex].value)">
                                    <option value="">Please Select..</option>
                                    <option value="insured_person_residential">@lang('appointment.attr.insured_person_residential')</option>
                                    <option value="employer_premis">@lang('appointment.attr.employer_premis')</option>
                                    <option value="socso_office">@lang('appointment.attr.socso_office')</option>
                                    <option value="hospital">@lang('appointment.attr.hospital')</option>
                                    <option value="appointmentOthers">@lang('appointment.attr.others')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="hide_insured_person_residential" class="form-group " style="display:none">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>@lang('registrationRtw.attr.address')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->add1 != '')
                                <input type="text" id="add1" name="add1" value="{{ $casertw->add1 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                @if(!empty($casertw) && $casertw->add2 != '')
                                <input type="text" id="add2" name="add2" value="{{ $casertw->add2 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="control-label">@lang('insuredPerson.attr.city')<span class="text-danger">*</span></label>
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.postcode')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $casertw->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.pobox')</label>
                                @if(!empty($obprofile) && $obprofile->pobox != '')
                                <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                                @else
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.lockedbag')</label>
                                @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                                @else
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.wdt')</label>
                                @if(!empty($obprofile) && $obprofile->wdt != '')
                                <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                                @else
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div id="hide_employer_premis" class="form-group" style="display:none">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="control-label">@lang('registrationRTW.attr.compname')</label>
                                <input type="text" id="name" class="form-control" value="@if(!empty($casertw)){{ $casertw->empname }} @endif">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>@lang('registrationRtw.attr.address')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->add1 != '')
                                <input type="text" id="add1" name="add1" value="{{ $casertw->add1 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                @if(!empty($casertw) && $casertw->add2 != '')
                                <input type="text" id="add2" name="add2" value="{{ $casertw->add2 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="control-label">@lang('insuredPerson.attr.city')<span class="text-danger">*</span></label>
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.postcode')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $casertw->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.pobox')</label>
                                @if(!empty($obprofile) && $obprofile->pobox != '')
                                <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                                @else
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.lockedbag')</label>
                                @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                                @else
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.wdt')</label>
                                @if(!empty($obprofile) && $obprofile->wdt != '')
                                <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                                @else
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div id="hide_socso_office" class="form-group " style="display:none">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="control-label">@lang('appointment.attr.socso_office')</label>
                                <input class="form-control" type="text"  id="hosp_name">
                            </div>
                        </div>
                    </div>

                    <div id="hide_hospital" class="form-group " style="display:none">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="control-label">@lang('appointment.attr.hospital_name')</label>
                                <input class="form-control" type="text"  id="hosp_name">
                            </div>
                            <div class="col-md-4">
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
                    </div>

                    <div id="hide_others" class="form-group " style="display:none">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>@lang('appointment.attr.name')<span class="text-danger">*</span></label>
                                <input type="text" id="othersName" name="othersName" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>@lang('registrationRtw.attr.address')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->add1 != '')
                                <input type="text" id="add1" name="add1" value="{{ $casertw->add1 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                @if(!empty($casertw) && $casertw->add2 != '')
                                <input type="text" id="add2" name="add2" value="{{ $casertw->add2 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="control-label">@lang('insuredPerson.attr.city')<span class="text-danger">*</span></label>
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.postcode')<span class="text-danger">*</span></label>
                                @if(!empty($casertw) && $casertw->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $casertw->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.pobox')</label>
                                @if(!empty($obprofile) && $obprofile->pobox != '')
                                <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                                @else
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.lockedbag')</label>
                                @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                                @else
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label>@lang('registrationRtw.attr.wdt')</label>
                                @if(!empty($obprofile) && $obprofile->wdt != '')
                                <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                                @else
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('appointment.attr.remarks')</label>
                                <textarea class="form-control clearFields" rows="5" type="textarea"  id="appointmentRemarks"></textarea>
                            </div>
                        </div>
                    </div>
                        
                     
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}
<div class="modal fade" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('appointment.title1')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="event-name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input id="event-name" name="event-name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="event-location" class="col-sm-4 control-label">Location</label>
                        <div class="col-sm-8">
                            <input id="event-location" name="event-location" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="min-date" class="col-sm-4 control-label">Dates</label>
                        <div class="col-sm-8">
                            <div class="input-group input-daterange" id="date-range">
                                <input id="min-date" name="takwim-start-date" type="text" class="form-control">
                                <div class="input-group-prepend input-group-append">
                                    <div class="input-group-text">to</div>
                                </div>
                                <input name="takwim-end-date" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save-event">Save</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    
    function appointmentFunc(aval) {
        if (aval == "insured_person_residential") {
            $('#hide_insured_person_residential').show(); 
            $('#hide_employer_premis').hide();
            $('#hide_socso_office').hide();
            $('#hide_hospital').hide();
            $('#hide_others').hide();
        } 
        else if (aval == "employer_premis"){
            $('#hide_employer_premis').show();
            $('#hide_insured_person_residential').hide();
            $('#hide_socso_office').hide();
            $('#hide_hospital').hide();
            $('#hide_others').hide();
        }
        else if (aval == "socso_office"){
            $('#hide_socso_office').show();
            $('#hide_insured_person_residential').hide();
            $('#hide_employer_premis').hide();
            $('#hide_hospital').hide();
            $('#hide_others').hide();
        }
        else if (aval == "hospital"){
            $('#hide_hospital').show();
            $('#hide_insured_person_residential').hide();
            $('#hide_employer_premis').hide();
            $('#hide_socso_office').hide();
            $('#hide_others').hide();
        }
        else if (aval == "appointmentOthers"){
            $('#hide_others').show();
            $('#hide_insured_person_residential').hide();
            $('#hide_employer_premis').hide();
            $('#hide_socso_office').hide();
            $('#hide_hospital').hide();
        }
        else {
            $('#hide_insured_person_residential').hide();
            $('#hide_employer_premis').hide();
            $('#hide_socso_office').hide();
            $('#hide_hospital').hide();
            $('#hide_others').hide();
        }
    }
      function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>