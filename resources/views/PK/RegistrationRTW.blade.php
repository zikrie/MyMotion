<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                        <h4 class="card-title">@lang('registrationRTW.title1')</h4>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.name')<span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  value="{{session::get('name')}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_type')</label>
                                    <select class="form-control" value="{{session::get('idtype')}}">
                                        <option>Please Select</option>
                                        @foreach($idtype as $id)
                                        @if ($id->refcode ==session::get('idtype'))
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_no')<span class="text-danger">*</span></label>
                                    <input type="text" id="idNum" class="form-control"  value="{{session::get('idno')}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.dateOfBirth')</label>
                                    @if(!empty($data) && $data->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($data->dob,0,4)}}-{{substr($data->dob,4,2)}}-{{substr($data->dob,6,2)}}" class="form-control" >
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.race')</label>
                                    <select class="form-control" id="race" name="race"> 
                                        {{-- <option>@lang('insuredPerson.attr.choose_race')</option> --}}
                                        <option>Please Select</option>
                                        @foreach($race as $id)
                                        @if (!empty($data) && $data->race == $id->refcode)
                                        <option value="malay" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.gender') <span class="text-danger">*</span></label>
                                    <select class="form-control" name="gender">
                                        <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                        <option>Please Select</option>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.occupation')</label>
                                    <input type="text" id="occupation" class="form-control" value="@if(!empty($data)){{ $data->occupation }} @endif">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.address')</label>
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
                                <label>@lang('registrationRTW.attr.city')</label>
                                <input type="text" class="form-control" name="city" value="@if(!empty($data)){{ $data->city }} @endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.state')</label>
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
                                <label>@lang('registrationRTW.attr.postcode')</label>
                                <input type="text" class="form-control" name="postcode" value="@if(!empty($data)){{ $data->postcode }} @endif">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.telNo')</label>
                                <input type="text" class="form-control" name="telno" value="@if(!empty($data)){{ $data->telno }} @endif">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.mobileNo')</label>
                                <input type="text" class="form-control" name="mobileno" value="@if(!empty($data)){{ $data->mobileno }} @endif">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.email') <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control"  value="@if(!empty($data)){{ $data->email }} @endif">
                            </div>
                        </div>
                        <div class="col-md-3">
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

                    </div>
                    <div class="form-action">
                        <a href=/homertw><button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.cancel')</button></a>
                        <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview') }}">PREVIEW</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



