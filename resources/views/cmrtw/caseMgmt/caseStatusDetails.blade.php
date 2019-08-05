<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                           
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('registrationRTW.attr.resource')</label>
                                        <input type="text" id="resource" class="form-control"  value="@if(!empty($data)){{ $data->uniquerefno }} @endif" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('registrationRTW.attr.case_accept')</label>
                                        <input type="text" id="case_accept" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('registrationRTW.attr.case_accept')</label>
                                        <input type="text" id="case_accept" class="form-control">
                                    </div>
                                </div>
                                
                                  
    
    
    
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
              
    
    