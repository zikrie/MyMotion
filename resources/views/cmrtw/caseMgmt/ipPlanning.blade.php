<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                        
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive m-t-40">
                                            <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>@lang('caseMgmt.attr.no')</th>
                                                        <th>@lang('caseMgmt.attr.rehab_plan')</th>
                                                        <th>@lang('caseMgmt.attr.start_time_suggest')</th>
                                                        <th>@lang('caseMgmt.attr.estimation_cost')</th>
                                                        <th>@lang('caseMgmt.attr.status')</th>   
                                                    </tr>
                                                </thead>                                              
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>WSA</td>
                                                        <td>19/03/2019</td>
                                                        <td>500</td>
                                                        <td>Active</td>                                                              
                                                    </tr>  
                                                    <tr>
                                                            <td>2</td>
                                                            <td>FCE</td>
                                                            <td>19/04/2019</td>
                                                            <td>500</td>
                                                            <td>Active</td>                                                              
                                                        </tr>                                                      
                                                </tbody>
                                            </table>   
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
    
    
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.wsa')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fce" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.fce')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#prm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.prm')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.mm')</span></a> </li>                 
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vtm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.vtm')</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jp" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.jp')</span></a> </li>       
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#va" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">VA</span></a> </li>          
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mobility" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Mobility</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#osm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">OSM/PSM/OPM</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#business" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Business/Financial Support</span></a> </li>              
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#discussion" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Discussion</span></a> </li>              
                                    </ul>
    
                                    <div class="tab-content tabcontent-border">
    
    
                                        {{-- WSA --}}
                                        <div class="tab-pane p-20" id="wsa" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexWSA') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>



                                        {{-- <div class="tab-pane p-20" id="wsa" role="tabpanel">
                                            <ul class="nav customtab" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Permission</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jobDetails" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Job Details</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointmentTrip" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Appointment Trip</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_form" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Form</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Report</span></a> </li>
                                            </ul>
                                            <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="permission" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.ipPermission')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="jobDetails" role="tabpanel">                                                  
                                                        @include('cmrtw.caseMgmt.PL.jobDetails')  
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="appointmentTrip" role="tabpanel">                                  
                                                         @include('cmrtw.caseMgmt.PL.appointmentTrip')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="wsa_form" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.wsaForm')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="wsa_report" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.wsaReport')
                                                    </div>
                                            </div>
                                        </div>     
                                         --}}
                                        

                                         {{-- FCE --}}
                                         <div class="tab-pane p-20" id="fce" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexFCE') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>



                                        {{-- <div class="tab-pane p-20" id="fce" role="tabpanel">
                                            <ul class="nav customtab" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#jobDetailIP" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Job Details Insured Person</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceDetails" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">FCE Details</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceForm" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">FCE Form</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceReport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">FCE Report</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modifiOfWork" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Modification Of Work</span></a> </li>
                                                   
                                            </ul>
                                            <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="jobDetailIP" role="tabpanel">
                                                    @include('cmrtw.caseMgmt.PL.fceJobDetails')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="fceDetails" role="tabpanel">
                                                    @include('cmrtw.caseMgmt.PL.fceDetails')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="fceForm" role="tabpanel">
                                                    @include('cmrtw.caseMgmt.PL.fceForm')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="fceReport" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.fceReport')
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="modifiOfWork" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.fceModificationWork')
                                                    </div>
                                                   
                                            </div>
                                        </div>     
                                        --}}
    
                                         {{-- PRM --}}
                                         <div class="tab-pane p-20" id="prm" role="tabpanel">                          
                                            <div class="tab-content tabcontent-border"> 
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.indexPRM') 
                                                    </div>  
                                                </div>                
                                            </div>
                                        </div>
    


                                        {{-- <div class="tab-pane p-20" id="prm" role="tabpanel">
                                                <ul class="nav customtab" role="tablist">
                                                       
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recoveryInformation" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Recovery Information</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehabReport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Rehab Report</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sessInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Session Information</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipAttendanceInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Insured Person Attendance Information</span></a> </li>
                                                       
                                                </ul>
                                                <div class="tab-content tabcontent-border">
                                                      
                                    
                                                        <div class="tab-pane p-20 active" id="recoveryInformation" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.prmRecovery')
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="rehabReport" role="tabpanel">
                                                        @include('cmrtw.caseMgmt.PL.prmRehabReport')
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="sessInfo" role="tabpanel">
                                                            @include('cmrtw.caseMgmt.PL.prmSessionDetails')
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="ipAttendanceInfo" role="tabpanel">
                                                            @include('cmrtw.caseMgmt.PL.prmIpAttend')
                                                        </div>
                                                       
                                                </div>
                                            </div>     
     --}}


                                            {{-- MM --}}
                                            <div class="tab-pane p-20" id="mm" role="tabpanel">                          
                                                <div class="tab-content tabcontent-border"> 
                                                    <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                            @include('cmrtw.caseMgmt.MM.indexMM') 
                                                        </div>  
                                                    </div>                
                                                </div>
                                            </div>





                                                {{-- VTM --}}
                                            <div class="tab-pane p-20" id="vtm" role="tabpanel">                          
                                                <div class="tab-content tabcontent-border"> 
                                                    <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                            @include('cmrtw.caseMgmt.PL.indexVTM') 
                                                        </div>  
                                                    </div>                
                                                </div>
                                            </div>
            
    
    
    
                                                {{-- <div class="tab-pane p-20" id="vtm" role="tabpanel">
                                                        <ul class="nav customtab" role="tablist">
                                                               
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supplierApprovalVTM" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Supplier Approval</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reqForQuotVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Request for Quotation</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#quotationVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Quotation</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#suppInfoSelectedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Selected Supplier Information</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#courseInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Course Information</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cmApprovedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">CM - Approved</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scmApprovedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">SCM HQ - Approved</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipAttendanceInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Insured Person Attendance Information</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vtReportVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">VT Report</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bussInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Business Information Insured Person  </span></a> </li>
                                                        </ul>
                                                        <div class="tab-content tabcontent-border">
                                                               
                                            
                                                                <div class="tab-pane p-20" id="supplierApprovalVTM" role="tabpanel">
                                                                @include('cmrtw.caseMgmt.PL.vtmSupplierApproval')
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="reqForQuotVTM" role="tabpanel">
                                                                @include('cmrtw.caseMgmt.PL.vtmRequestQuo')
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="quotationVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmQuotation')
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="suppInfoSelectedVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmSelectedSupplier')
                                                                </div>
                                                               
                                                                <div class="tab-pane p-20" id="courseInfoVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmCourseDetails')
                                                                </div>
     
                                                                <div class="tab-pane p-20" id="cmApprovedVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmCmApproved')
                                                                </div>
             
                                                                <div class="tab-pane p-20" id="scmApprovedVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmScmApproved')
                                                                </div>
              
                                                                <div class="tab-pane p-20" id="ipAttendanceInfoVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmIpAttend')
                                                                </div>
                                                                    
                                                                <div class="tab-pane p-20" id="vtReportVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmReport')
                                                                </div>
                                        
                                                                <div class="tab-pane p-20" id="bussInfoVTM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.vtmIpBusiness')
                                                                </div>
                                                        </div>
                                                    </div>      --}}
    
    
    
                                                    {{-- JP --}}
                                                    <div class="tab-pane p-20" id="jp" role="tabpanel">                          
                                                        <div class="tab-content tabcontent-border"> 
                                                            <div class="tab-content tabcontent-border">
                                                                <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.indexJP') 
                                                                </div>  
                                                            </div>                
                                                        </div>
                                                    </div>
            




                                                    
                                                     {{-- <div class="tab-pane p-20" id="jp" role="tabpanel">
                                                            <ul class="nav customtab" role="tablist">
                                                                    
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#laser_assess" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">LASER Assessment</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jp_ip" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Job Placement Insured Person Details</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jp_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Job Placement Report</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#search_job" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Search Job Activity</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appreciation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Appreciation Letter</span></a> </li>
                                                            </ul>
                                                            <div class="tab-content tabcontent-border">
                                                                    
                                                
                                                                    <div class="tab-pane p-20" id="laser_assess" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.jpLaserAssess')
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="jp_ip" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.jpIpPlacement')
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="jp_report" role="tabpanel">
                                                                        @include('cmrtw.caseMgmt.PL.jpReport')
                                                                    </div>
                                                                    <div class="tab-pane p-20" id="search_job" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.jpSearchJob')
                                                                        </div>
                                                
                                                                    <div class="tab-pane p-20" id="appreciation" role="tabpanel">
                                                                      
                                                                    </div>
                                                            </div>
                                                        </div>     
         --}}
                                                        
    
    
    
                                                        {{-- <div class="tab-pane p-20" id="financial" role="tabpanel">
                                                                <ul class="nav customtab" role="tablist">
                                                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_form" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                </ul>
                                                                <div class="tab-content tabcontent-border">
                                                                        <div class="tab-pane p-20 active" id="permission" role="tabpanel">
                                                                       
                                                                        shahira
                                                                        </div>
                                                    
                                                                        <div class="tab-pane p-20" id="job_details" role="tabpanel">
                                                                        
                                                                        shahira
                                                                        </div>
                                                    
                                                                        <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                                                       
                                                                        shahira
                                                                        </div>
                                                    
                                                                        <div class="tab-pane p-20" id="wsa_form" role="tabpanel">
                                                                           
                                                                            shahira
                                                                        </div>
                                                    
                                                                        <div class="tab-pane p-20" id="wsa_report" role="tabpanel">
                                                                           
                                                                            shahira
                                                                        </div>
                                                                </div>
                                                            </div>      --}}
    
                                                            
                                                    {{-- VA --}}
                                                    <div class="tab-pane p-20" id="va" role="tabpanel">                          
                                                        <div class="tab-content tabcontent-border"> 
                                                            <div class="tab-content tabcontent-border">
                                                                <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                    @include('cmrtw.caseMgmt.PL.indexVA') 
                                                                </div>  
                                                            </div>                
                                                        </div>
                                                    </div>
                     

                                        {{-- <div class="tab-pane p-20" id="va" role="tabpanel">
                                                <ul class="nav customtab" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#vaAssessment" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Vocational Assessment Details</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipVerifi" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Insured Person Verification</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recomByCM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Recommendation By Case Manager</span></a> </li>
                                                </ul>
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="vaAssessment" role="tabpanel">
                                                         @include('cmrtw.caseMgmt.PL.vaAssessment')
                                                    </div>
                                                    <div class="tab-pane p-20 " id="ipVerifi" role="tabpanel">
                                                        
                                                    </div>
                                                    <div class="tab-pane p-20 " id="recomByCM" role="tabpanel">
                                                         @include('cmrtw.caseMgmt.PL.vaRecommendation')
                                                    </div>
                                                </div>
                                            </div>    --}}
                                                            
                                                            <div class="tab-pane p-20" id="mobility" role="tabpanel">
                                                                    <ul class="nav customtab" role="tablist">
                                                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#mobilityDetails" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Mobility Details</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#equipAndGuard" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Equipment and Guardian</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#trrcOffDetails" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"></span>TRRC Officer Details</a> </li>
                                                                        <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#caseNote" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Case Note</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aomApproval" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">AOM Approval</span></a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#JourVerifiReportCM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"></span>Journey Verification Report - CM</a> </li>
                                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#JourVerifiReportHQSCM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"></span>Journey Verification Report - HQ SCM</a> </li>
                                                                    </ul>
                                                                    <div class="tab-content tabcontent-border">
                                                                        <div class="tab-pane p-20 active" id="mobilityDetails" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.mobMobiliti')
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="equipAndGuard" role="tabpanel">
                                                                             @include('cmrtw.caseMgmt.PL.mobGuardian')
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="trrcOffDetails" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.mobTrrcOffDetail') 
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="caseNote" role="tabpanel">
                                                                             @include('cmrtw.caseMgmt.PL.mobNotakes') 
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="aomApproval" role="tabpanel">
                                                                             @include('cmrtw.caseMgmt.PL.mobAomapproval')
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="JourVerifiReportCM" role="tabpanel">
                                                                             @include('cmrtw.caseMgmt.PL.mobJourneyCM') 
                                                                        </div>
                                                                        <div class="tab-pane p-20 " id="JourVerifiReportHQSCM" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.mobJourneyHQSCM')
                                                                        </div>
                                                                        
                                                                                        </div>
                                                                                </div>  
                                                            
                                                            


                                                            {{-- OSM --}}
                                                            <div class="tab-pane p-20" id="osm" role="tabpanel">                          
                                                                <div class="tab-content tabcontent-border"> 
                                                                    <div class="tab-content tabcontent-border">
                                                                        <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.indexOSM') 
                                                                        </div>  
                                                                    </div>                
                                                                </div>
                                                            </div>




                                                                                
                                                            {{-- <div class="tab-pane p-20" id="osm" role="tabpanel">
                                                                    <ul class="nav customtab" role="tablist">
                                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#application" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Application</span></a> </li>
                                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#decision_feedback" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Decision Feedback</span></a> </li>
                                                                            
                                                                    </ul>
                                                                    <div class="tab-content tabcontent-border">
                                                                            <div class="tab-pane p-20 active" id="application" role="tabpanel">
                                                                                    @include('cmrtw.caseMgmt.PL.osmApplication')
                                                                            </div>
                                                                            <div class="tab-pane p-20 " id="decision_feedback" role="tabpanel">
                                                                                    @include('cmrtw.caseMgmt.PL.osmFeedback')
                                                                            </div>
                                                                           
                                                                            
                                                    
                                                                    </div>
                                                            </div>    --}}





                                                            
                                                            {{-- BUSINESS --}}
                                                            <div class="tab-pane p-20" id="business" role="tabpanel">                          
                                                                <div class="tab-content tabcontent-border"> 
                                                                    <div class="tab-content tabcontent-border">
                                                                        <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                            @include('cmrtw.caseMgmt.PL.indexBUSINESS') 
                                                                        </div>  
                                                                    </div>                
                                                                </div>
                                                            </div>
{{--     
                                                             <div class="tab-pane p-20" id="business" role="tabpanel">
                                                                            <ul class="nav customtab" role="tablist">
                                                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#support_doc_business" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Supporting Document Details</span></a> </li>
                                                                                   
                                                                                   
                                                                                   
                                                                            </ul>
                                                                            <div class="tab-content tabcontent-border">
                                                                                    <div class="tab-pane p-20 active" id="support_doc_business" role="tabpanel">
                                                                                            @include('cmrtw.caseMgmt.PL.bfSupportDocDetails')
                                                                                    </div>
                                                                                     <div class="tab-pane p-20 " id="business_case_note" role="tabpanel">
                                                                                                   
                                                                                    </div> 
                            
                                                                            </div>
                                                                    </div>    --}}
    

                                                                      {{-- DISCUSSION --}}
                                                                    <div class="tab-pane p-20" id="discussion" role="tabpanel">                          
                                                                        <div class="tab-content tabcontent-border"> 
                                                                            <div class="tab-content tabcontent-border">
                                                                                <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                                    @include('cmrtw.caseMgmt.PL.indexDISCUSSION') 
                                                                                </div>  
                                                                            </div>                
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    {{-- <div class="tab-pane p-20" id="discussion" role="tabpanel">
                                                                                    <ul class="nav customtab" role="tablist">
                                                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#discuss_cat" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Discussion Category</span></a> </li>
                                                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comm_ip" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Insured Person Communication Details</span></a> </li>
                                                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#group_discuss" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Group Discussion Details</span></a> </li>
                                                                                           
                                                                                           
                                                                                    </ul>
                                                                                    <div class="tab-content tabcontent-border">
                                                                                            <div class="tab-pane p-20 active" id="discuss_cat" role="tabpanel">
                                                                                                    @include('cmrtw.caseMgmt.PL.discussionCat')
                                                                                            </div>
                                                                                            <div class="tab-pane p-20 " id="comm_ip" role="tabpanel">
                                                                                                    @include('cmrtw.caseMgmt.PL.discussionGrouping')
                                                                                            </div>
                                                                                            <div class="tab-pane p-20 " id="group_discuss" role="tabpanel">
                                                                                                    @include('cmrtw.caseMgmt.PL.discussionResult')
                                                                                            </div>
                                                                                            
                                                                                            
                                                                    
                                                                                    </div>
                                                                            </div>                               --}}
                                        
                                    </div>
    
                                        
                                
                                    
    
    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    