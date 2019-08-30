<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw" method="POST">
                        <div class="form-body">
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>@lang('registrationRtw.attr.empcode')</label>
                                                <input type="text" class="form-control"  value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('registrationRtw.attr.emptype')</label>
                                                    <input type="text" class="form-control"  value="">
                                                </div>
                                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('registrationRTW.attr.compname')</label>
                                        <input type="text" id="name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('caseMgmt.attr.address')</label>
                                        <input type="text" class="form-control"  value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control" value="">
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
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>@lang('registrationRTW.attr.pobox')</label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('registrationRTW.attr.lockedbag')</label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>@lang('registrationRTW.attr.wdt')</label>
                                                    <input type="text" class="form-control" value="">
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
                               
                            </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
    
    </div>
    
    
    
    