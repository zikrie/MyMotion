<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        
                        
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.caserefno')</label>
                                    <input type="text" id="uniquerefno" class="form-control"  value="@if(!empty($data)){{ $data->uniquerefno }} @endif" >
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.name')</label>
                                    <input type="text" id="name" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('registrationRTW.attr.id_no')</label>
                                    <input type="text" id="idNum" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-8">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.email')</label>
                            <input type="text" class="form-control" name="telno" value="@if(!empty($data)){{ $data->telno }} @endif">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>@lang('registrationRTW.attr.mobileNo')</label>
                            <input type="text" class="form-control" name="mobileno" value="@if(!empty($data)){{ $data->mobileno }} @endif">
                        </div>
                    </div>

                    </div>

    </div>
                
                </div>
            </form>
        </div>
    </div>
</div>


 <ul class="nav customtab " role="tablist">
            
                    
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#plan_list" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.planlist')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gl" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.gl')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehab_al" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.rehab_al')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_note" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_note')</span></a> </li>
                     
                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_status" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_status')</span></a> </li>

                     <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.supporting_document')</span></a> </li>
                  
</ul>

    <div class="tab-content tabcontent-border">

                    <div class="tab-pane p-20" id="plan_list" role="tabpanel">
                      @include('cmrtw.caseMgmt.planList')
                    </div>

                     <div class="tab-pane p-20" id="gl" role="tabpanel">
                      @include('cmrtw.caseMgmt.GL.glList')
                    </div>

                    <div class="tab-pane p-20" id="rehab_al" role="tabpanel">
                      @include('cmrtw.caseMgmt.rehabAllowance')
                    </div>

                    <div class="tab-pane p-20" id="case_note" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseNote')
                    </div>

                    <div class="tab-pane p-20" id="case_status" role="tabpanel">
                        @include('cmrtw.caseMgmt.caseStatus')
                    </div>

                    <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                        @include('cmrtw.caseMgmt.supportDoc')
                    </div>


               
                </div>







          

