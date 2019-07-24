<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
                        <h4 class="card-title">@lang('registrationRTW.title4')</h4>
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.name')<span class="text-danger">*</span></label>
                                    <input type="text" required id="name" class="form-control"  value="@if(!empty($casertw)){{ $casertw->name }} @endif" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_type')</label>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_no')<span class="text-danger">*</span></label>
                                    <input required type="text" id="idNum" class="form-control" value="@if(!empty($casertw)){{ $casertw->idno }} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.dateOfBirth')</label>
                                     @if(!empty($casertw) && $casertw->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($casertw->dob,0,4)}}-{{substr($casertw->dob,4,2)}}-{{substr($casertw->dob,6,2)}}" class="form-control" >
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.race')</label>
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
                                <label class="control-label">@lang('registrationRTW.attr.gender')<span class="text-danger">*</span></label>
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.occupation')</label>
                                <input type="text" id="occupation" class="form-control" value="@if(!empty($casertw)){{ $casertw->occupation }} @endif">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('registrationRTW.attr.address')</label>
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
                                <label>@lang('registrationRTW.attr.city')</label>
                                <input type="text" class="form-control" name="city" value="@if(!empty($casertw)){{ $casertw->city }} @endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.state')</label>
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
                            <label>@lang('registrationRTW.attr.postcode')</label>
                            <input type="text" class="form-control" name="postcode" value="@if(!empty($casertw)){{ $casertw->postcode }} @endif">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.telNo')</label>
                            <input type="text" class="form-control" name="telno" value="@if(!empty($casertw)){{ $casertw->telno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.mobileNo')</label>
                            <input type="text" class="form-control" name="mobileno" value="@if(!empty($casertw)){{ $casertw->mobileno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.email')<span class="text-danger">*</span></label>
                            <input required type="text" name="email" class="form-control" value="@if(!empty($casertw)){{ $casertw->email }} @endif" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('registrationRTW.attr.citizen')</label>

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
        {{-- </div> --}}
        {{-- <div class="form-body"> --}}
                    <h4 class="card-title">@lang('registrationRTW.title2')</h4>
                    <hr>
                    <div class="row p-t-20">
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
                                <label>@lang('registrationRTW.attr.city')</label>
                                <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empcity}} @endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('registrationRTW.attr.state')</label>
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
                            <label>@lang('registrationRTW.attr.postcode')</label>
                            <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->emppostcode }} @endif">
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
                            <label>@lang('registrationRTW.attr.faxno')</label>
                            <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empfaxno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.email')</label>
                            <input type="text" class="form-control" value="@if(!empty($casertw)){{ $casertw->empemail }} @endif">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-7"> 
                                            <label for="example-text-input" class="col-form-label">@lang('registrationRTW.attr.inservice')</label>
                                        </div>
                                         <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="yes" name="yesno" class="custom-control-input">
                                                    <label class="custom-control-label" for="yes">@lang('registrationRTW.attr.yes')</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="no" name="yesno" class="custom-control-input">
                                                    <label class="custom-control-label" for="no">@lang('registrationRTW.attr.no')</label>
                                                </div>
                                            </label>
                    </div>
                </div>
                
                
              {{--   <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.cancel')</button>
                       <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                        @lang('registrationRTW.save')</button>
                    </div> --}}
                </div>

            
            {{-- </form>
            <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data"> --}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h4 class="card-title">@lang('registrationRTW.title3')</h4>
                        {{--<hr class="m-t-0 m-b-40">--}}
                        <hr>
                        @if(Session::get('messagedoc'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagedoc')}}
                            </div>

                        </div>
                        <br>

                        @elseif (!empty($messagedoc))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagedoc}}
                            </div>

                        </div>
                        <br>
                        <br>
                        @endif

                        <div class="form-actions">

                            <div class="row">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        @if(count($errors)>0)
                                        <ul>
                                            @foreach($errors->all() as $error)

                                            <li class="alert alert danger">{{$error}}</li>

                                            @endforeach

                                        </ul>

                                        @endif
                                        <table class="table" id="table_upload_doc">
                                            <col width="50%">
                                            <col width="30%">
                                            <col width="20%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>@lang('registrationRTW.attr.docdesc')</th>
                                                    <th>@lang('registrationRTW.attr.docpath')</th>
                                                    <th>@lang('registrationRTW.attr.docview')</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                             
                                                
                                            

                                              
                                                <tr>
                                                   
                                             
                                                <td>@lang('registrationRTW.attr.supdoc')</td>
                                                        
                                                <td><span class="choosefile"><input type="file" name="pdf[1]"
                                                        id="pdf_cancel_">
                                                    {{--<div class="preview btn_cancel_{{$cnt}}"> --}}
                                                        <i class=" preview btn_cancel_ icon-close"></i>
                                                    {{--</div>--}}
                                                    </span>
                                                </td>
                                               
                                                    <td>
                                                        {{--  @if (!empty($docinfo))
                                                          @foreach ($docinfo as $d) --}}
                                                         
                                                         <a href='/viewdoc' target="_blank"><i class="far fa-file-alt"></i>
                                                       </a>
                                                     
                                               {{--  @endforeach
                                                @endif --}}


                                                   </td>
                                            </tbody>


                                        </table>
                                   {{--      <table>
                                            <tr>
                                                <td id="select_database" style="display:none;">
                                                    <select id="idtype_doc" class="form-control" name="idtype">
                                                        <option value="" selected disable hidden></option>
                                                        @foreach($doclist_select as $data)
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">
                                                            {{ $data -> docdescen}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                            </tr>


                                        </table>  --}}
                                    </div>



                                    <div class="form-action">
                                         <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('registrationRTW.attr.submit')</button>
                                        <a href=/homertw><button type="button" class="btn btn waves-effect waves-light btn-secondary">Back</button></a>
                                       
                                       {{--  <button type="submit"
                                            class="btn btn waves-effect waves-light btn-success">@lang('registrationRTW.attr.submit')</button>
                                        
                                             <button type="button" id="add_doc"
                                            class="btn btn-secondary">@lang('registrationRTW.attr.reset')</button>
                                            <button type="button" id="add_doc"
                                            class="btn btn waves-effect waves-light btn-success">@lang('registrationRTW.attr.save')</button> --}}
                                        
                                        <!--button type="submit"
                                            class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                        
                                    </div>






                                </div>
                            </div>
                            <br />


                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>

          

