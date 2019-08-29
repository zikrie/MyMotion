<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                                {{-- <h5 class="card-title"> @lang('caseMgmt.attr.case_status_details')</h5> --}}
                            
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                           
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.current_status')</label>
                                        <select name="select_opt" id="select_opt" class="form-control" required> 
                                                <option value="">Please Select</option>
                                                <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                                <option value="no">@lang('caseMgmt.attr.no')</option>
                                               
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.current_date')</label>
                                            <input type="date" id="current_date" class="form-control" disabled>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.hierarchy_rtw')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="hiera1">@lang('caseMgmt.attr.hiera1')</option>
                                                        <option value="hiera2">@lang('caseMgmt.attr.hiera2')</option>
                                                        <option value="hiera3">@lang('caseMgmt.attr.hiera3')</option>
                                                        <option value="hiera4">@lang('caseMgmt.attr.hiera4')</option>
                                                </select>
                                            </div>
                                        </div>
                                
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.received_mc')</label>
                                            <input type="text" id="received_mc" class="form-control" disabled>
                                        </div>
                                    </div>
                               
                              
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                            <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50" disabled></textarea>
                                        </div>
                                    </div>
                                
                                  
    
    
    
                        </div>

                        <div id="accordion2" role="tablist" class="accordion" >
                  
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2" style="background-color: #FFFFFF;">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.current_employment')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.PL.wsaCurrentEmploy')
                                    </div>
                                </div>
                            </div>

                           <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingGLletter" style="background-color: #FFFFFF;">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseGLletter" aria-expanded="false" aria-controls="collapseGLletter">
                                        <h5 class="card-title" ><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.working_history')</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseGLletter" class="collapse" role="tabpanel" aria-labelledby="headingGLletter">
                                <div class="card-body">
                                        @include('cmrtw.caseMgmt.PL.wsaWorkingHistory')
                                    
                                    <div id="accordionEmploymenr" role="tablist" class="accordion" >
                                        <div class="card m-b-0">
                                            <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingEmp ">
                                                <h5 class="mb-0">                           
                                                    <a class="link" data-toggle="collapse" data-parent="#accordionEmp" href="#collapseEmp" aria-expanded="true" aria-controls="collapseEmp">
                                                        <i class="fa fa-plus"></i>   @lang('caseMgmt.attr.ip_emp_opt')
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseEmp" class="collapse" role="tabpanel" aria-labelledby="headingEmp">
                                                <div class="card-body">
                                                @include('cmrtw.caseMgmt.PL.wsaEmploymentOpt') 
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card m-b-0">
                                            <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingAccess ">
                                                <h5 class="mb-0">                           
                                                    <a class="link" data-toggle="collapse" data-parent="#accordionEmp" href="#collapseAccess" aria-expanded="true" aria-controls="collapseAccess">
                                                        <i class="fa fa-plus"></i>  @lang('caseMgmt.attr.accessibility')
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseAccess" class="collapse" role="tabpanel" aria-labelledby="headingAccess">
                                                <div class="card-body">
                                                    @include('cmrtw.caseMgmt.PL.wsaAccessibility')
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                                                                   
                                      

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
              
    
    