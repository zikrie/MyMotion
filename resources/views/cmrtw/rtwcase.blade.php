<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
<<<<<<< HEAD
                        <h4 class="card-title">Insured Person Information</h4>
=======
                        <h4 class="card-title">@lang('registrationRtw.title4')</h4>
>>>>>>> 0fc4e4edabc27a78cc4e42c0067c669cbff73463
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.name')<span class="text-danger">*</span></label>
                                    <input type="text" required id="name" class="form-control"  value="@if(!empty($casertw)){{ $casertw->name }} @endif" required>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.id_type')</label>
                                  <select class="form-control" value="@if(!empty($casertw)){{ $casertw->idtype }} @endif">
                                        <option>Please Select</option>
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
                                    <label class="control-label">@lang('registrationRtw.attr.id_no')<span class="text-danger">*</span></label>
                                    <input required type="text" id="idNum" class="form-control" value="@if(!empty($casertw)){{ $casertw->idno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.dateOfBirth')</label>
                                     @if(!empty($casertw) && $casertw->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($casertw->dob,0,4)}}-{{substr($casertw->dob,4,2)}}-{{substr($casertw->dob,6,2)}}" class="form-control" >
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.race')</label>
                                    <select class="form-control" name="race"> 
                                        {{-- <option>@lang('insuredPerson.attr.choose_race')</option> --}}
                                         <option>Please Select</option>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.gender')<span class="text-danger">*</span></label>
                                    <select class="form-control" name="gender">
                                        <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                        <option>Please Select</option>
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
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.occupation')</label>
                                    <input type="text" id="occupation" class="form-control" value="@if(!empty($casertw)){{ $casertw->occupation }} @endif">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('registrationRtw.attr.address')</label>
                                    <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->add1 }} @endif" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->add2 }} @endif">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('registrationRtw.attr.city')</label>
                                    <input type="text" class="form-control" name="city" value="@if(!empty($casertw)){{ $casertw->city }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.state')</label>
                                    <select name='state' id='state' class='form-control'>
                                        <option>Please Select</option>
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
                                    <label>@lang('registrationRtw.attr.postcode')</label>
                                    <input type="text" class="form-control" name="postcode" value="@if(!empty($casertw)){{ $casertw->postcode }} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>@lang('registrationRtw.attr.telNo')</label>
                                    <input type="text" class="form-control" name="telno" value="@if(!empty($casertw)){{ $casertw->telno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>@lang('registrationRtw.attr.mobileNo')</label>
                                    <input type="text" class="form-control" name="mobileno" value="@if(!empty($casertw)){{ $casertw->mobileno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>@lang('registrationRtw.attr.email')<span class="text-danger">*</span></label>
                                    <input required type="text" name="email" class="form-control" value="@if(!empty($casertw)){{ $casertw->email }} @endif" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRtw.attr.citizen')</label>

                                    <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                        <option>Please Select</option>
                                    @foreach($national as $N)
                                    @if (!empty($casertw) && $casertw->nationality == $N->refcode)
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
                                     {{--     <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('registrationRTW.attr.submit')</button> --}}
                                     <button type="submit" class="btn waves-effect waves-light btn-success"  >NEXT</button>
                     <button type="button" class="btn waves-effect waves-light btn-success text-white" onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                    <button type="submit" class="btn waves-effect waves-light btn-success">
                            SAVE</button>
                        </div>

            
            {{-- </form>
            <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data"> --}}
                   
                                       
                                       {{--  <button type="submit"
                                            class="btn btn waves-effect waves-light btn-success">@lang('registrationRtw.attr.submit')</button>
                                        
                                             <button type="button" id="add_doc"
                                            class="btn btn-secondary">@lang('registrationRtw.attr.reset')</button>
                                            <button type="button" id="add_doc"
                                            class="btn btn waves-effect waves-light btn-success">@lang('registrationRtw.attr.save')</button> --}}
                                        
                                        <!--button type="submit"
                                            class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                        
                                    </div>
</form>





                                </div>
                            </div>
                        


                        </div>
                    </div>
                


          

