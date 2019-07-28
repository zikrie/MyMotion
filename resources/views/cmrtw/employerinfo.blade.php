<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">
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
                        <div class="col-6"> 
                                            <label for="example-text-input" class="col-form-label">Insured Person is still in Service?</label>
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
                
                    
                    
                    
                    <div class="form-action">
                     {{--     <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('registrationRTW.attr.submit')</button> --}}
                     <button type="submit" class="btn waves-effect waves-light btn-success"  >NEXT</button>
                     <button type="button" class="btn waves-effect waves-light btn-success text-white" onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                    <button type="submit" class="btn waves-effect waves-light btn-success">
                            SAVE</button>
                     
                 </div>






             </div>
         </form>
     </div>
 </div>
</div>

</div>



