{{-- MODAL --}}
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="update-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updatetakwim_form" action="/takwim/update" method="post">
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="control-label">@lang('appointment.attr.date')<span class="text-danger">*</span></label>
                            <input class="form-control" type="date"  id="appointmentDate">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">@lang('appointment.attr.time')<span class="text-danger">*</span></label>
                            <input class="form-control" type="time"  id="appointmentTime">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="control-label">@lang('appointment.attr.location')<span class="text-danger">*</span></label>
                            <select class="form-control select " id="appointmentLocation" name='appointmentLocation' onchange="appointmentFunc(this.options[this.selectedIndex].value)">
                                <option value="">Please Select</option>
                                <option value="insured_person_residential">@lang('appointment.attr.insured_person_residential')</option>
                                <option value="employer_premis">@lang('appointment.attr.employer_premis')</option>
                                <option value="socso_office">@lang('appointment.attr.socso_office')</option>
                                <option value="hospital">@lang('appointment.attr.hospital')</option>
                                <option value="appointmentOthers">@lang('appointment.attr.others')</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <div id="hide_socso_office" class="form-group " style="display:none">
                                <label class="control-label">@lang('appointment.attr.socso_office')</label>
                                <input class="form-control" type="text"  id="hosp_name">
                            </div>
                        </div>

                    </div>

                    <div id="hide_insured_person_residential" class="form-group" style="display:none"> 
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save-event">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>