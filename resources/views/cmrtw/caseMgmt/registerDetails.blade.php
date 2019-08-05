<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                       
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.resource')</label>
                                    <input type="text" id="resource" class="form-control"  value="@if(!empty($data)){{ $data->uniquerefno }} @endif" >
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.case_accept')</label>
                                    <input type="text" id="case_accept" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.rtwrefno')</label>
                                    <input type="text" id="rtwrefno" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.decision')</label>
                                    <input type="text" id="decision" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.remarks')</label>
                                    <input type="text" id="remarks" class="form-control">
                                </div>
                            </div>



                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>

          

