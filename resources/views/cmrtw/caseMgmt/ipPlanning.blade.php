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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>                                                              
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
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#financial" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('caseMgmt.attr.financial')</span></a> </li>              
                                </ul>

                                <div class="tab-content tabcontent-border">


                                    <div class="tab-pane p-20" id="wsa" role="tabpanel">
                                        <ul class="nav customtab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Permission</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Job Details</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Appointment Trip</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_form" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Form</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">WSA Report</span></a> </li>
                                        </ul>
                                        <div class="tab-content tabcontent-border">
                                                <div class="tab-pane p-20 active" id="permission" role="tabpanel">
                                                @include('cmrtw.caseMgmt.PL.ipPermission')
                                                </div>
                            
                                                <div class="tab-pane p-20" id="job_details" role="tabpanel">
                                                        job_details
                                                {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                                        appointment
                                                {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}                           
                                                </div>
                            
                                                <div class="tab-pane p-20" id="wsa_form" role="tabpanel">
                                                        wsa_form
                                                    {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="wsa_report" role="tabpanel">
                                                        wsa_report
                                                    {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                </div>
                                        </div>
                                    </div>     
                                    
                                    

                                    <div class="tab-pane p-20" id="fce" role="tabpanel">
                                        <ul class="nav customtab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#jobDetailIP" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Job Details Insure Person</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceDetails" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">FCE Details</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceForm" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">FCE Form</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fceReport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">FCE Report</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modifiOfWork" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Modification Of Work</span></a> </li>
                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseNoteInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Case Note Information</span></a> </li>
                                        </ul>
                                        <div class="tab-content tabcontent-border">
                                                <div class="tab-pane p-20 active" id="jobDetailIP" role="tabpanel">
                                                        jobDetailIP
                                                {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="fceDetails" role="tabpanel">
                                                        fceDetails
                                                {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="fceForm" role="tabpanel">
                                                        fceForm
                                                {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="fceReport" role="tabpanel">
                                                        fceReport
                                                    {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                </div>
                            
                                                <div class="tab-pane p-20" id="modifiOfWork" role="tabpanel">
                                                        modifiOfWork
                                                    {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                </div>
                                                <div class="tab-pane p-20" id="caseNoteInfo" role="tabpanel">
                                                        caseNoteInfo
                                                    {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                </div>
                                        </div>
                                    </div>     




                                    <div class="tab-pane p-20" id="prm" role="tabpanel">
                                            <ul class="nav customtab" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insurePersonDetailsPRM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insured Person Details</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recoveryInformation" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Recovery Information</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rehabReport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Rehab Report</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sessInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Session Information</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipAttendanceInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Insured Person Attendance Information</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseNoteInfoPRM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Case Note Information</span></a> </li>
                                            </ul>
                                            <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane p-20 active" id="insurePersonDetailsPRM" role="tabpanel">
                                                            insurePersonDetails
                                                    {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="recoveryInformation" role="tabpanel">
                                                            recoveryInformation
                                                    {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="rehabReport" role="tabpanel">
                                                            rehabReport
                                                    {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="sessInfo" role="tabpanel">
                                                            sessInfo
                                                        {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                    </div>
                                
                                                    <div class="tab-pane p-20" id="ipAttendanceInfo" role="tabpanel">
                                                            ipAttendanceInfo
                                                        {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                    </div>
                                                    <div class="tab-pane p-20" id="caseNoteInfoPRM" role="tabpanel">
                                                            caseNoteInfoprm
                                                        {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                    </div>
                                            </div>
                                        </div>     


                                        <div class="tab-pane p-20" id="mm" role="tabpanel">
                                                <ul class="nav customtab" role="tablist">
                                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insurePersonDetailsMM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insure Person Details</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#RTWplanningInfo" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">RTW Planning Information</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modifiiHistoryInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Modifications History Information</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modifiInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Modifications Information</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scmSession" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">SCM Session (HQ) FOR JKK MEETING</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#JKKmeeting" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">JKK MEETING (AM)</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#SuppInfoSelected" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Supplier information selected</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modifiReport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Modifications Report</span></a> </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseNoteInfoMM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Case Note Information</span></a> </li>
                                                </ul>
                                                <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane p-20 active" id="insurePersonDetailsMM" role="tabpanel">
                                                                insurePersonDetailsMM
                                                        {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="RTWplanningInfo" role="tabpanel">
                                                                RTWplanningInfo
                                                        {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="modifiiHistoryInfo" role="tabpanel">
                                                                modifiiHistoryInfo
                                                        {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="modifiInfo" role="tabpanel">
                                                                modifiInfo
                                                            {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                        </div>
                                    
                                                        <div class="tab-pane p-20" id="scmSession" role="tabpanel">
                                                                scmSession
                                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                        </div>

                                                        <div class="tab-pane p-20" id="JKKmeeting" role="tabpanel">
                                                                JKKmeeting
                                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                        </div>

                                                        <div class="tab-pane p-20" id="SuppInfoSelected" role="tabpanel">
                                                                SuppInfoSelected
                                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                        </div>

                                                        <div class="tab-pane p-20" id="modifiReport" role="tabpanel">
                                                                modifiReport
                                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                        </div>

                                                        <div class="tab-pane p-20" id="caseNoteInfoMM" role="tabpanel">
                                                                caseNoteInfoMM
                                                            {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                        </div>
                                            </div>
                                            </div>     




                                            <div class="tab-pane p-20" id="vtm" role="tabpanel">
                                                    <ul class="nav customtab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insurePersonDetailsVTM" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Insured Person Details</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supplierApprovalVTM" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Supplier Approval</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reqForQuotVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Request for quotation</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#quotationVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Quotation</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#suppInfoSelectedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Supplier information selected</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#courseInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Course Information</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cmApprovedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">CM - Approved</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scmApprovedVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">SCM HQ - Approved</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ipAttendanceInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Insured Person Attendance Information</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vtReportVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">VT Report</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bussInfoVTM" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Business Information Insured Person  </span></a> </li>
                                                    </ul>
                                                    <div class="tab-content tabcontent-border">
                                                            <div class="tab-pane p-20 active" id="insurePersonDetailsVTM" role="tabpanel">
                                                                    insurePersonDetailsVTM
                                                            {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}
                                                            </div>
                                        
                                                            <div class="tab-pane p-20" id="supplierApprovalVTM" role="tabpanel">
                                                                    supplierApprovalVTM
                                                            {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                            </div>
                                        
                                                            <div class="tab-pane p-20" id="reqForQuotVTM" role="tabpanel">
                                                                    reqForQuotVTM
                                                            {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                            </div>
                                        
                                                            <div class="tab-pane p-20" id="quotationVTM" role="tabpanel">
                                                                    quotationVTM
                                                                {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                            </div>
                                        
                                                            <div class="tab-pane p-20" id="suppInfoSelectedVTM" role="tabpanel">
                                                                    suppInfoSelectedVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
                                                           
                                                            <div class="tab-pane p-20" id="courseInfoVTM" role="tabpanel">
                                                                    courseInfoVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
 
                                                            <div class="tab-pane p-20" id="cmApprovedVTM" role="tabpanel">
                                                                    cmApprovedVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
         
                                                            <div class="tab-pane p-20" id="scmApprovedVTM" role="tabpanel">
                                                                    scmApprovedVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
          
                                                            <div class="tab-pane p-20" id="ipAttendanceInfoVTM" role="tabpanel">
                                                                    ipAttendanceInfoVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
                                                                
                                                            <div class="tab-pane p-20" id="vtReportVTM" role="tabpanel">
                                                                    vtReportVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
                                    
                                                            <div class="tab-pane p-20" id="bussInfoVTM" role="tabpanel">
                                                                    bussInfoVTM
                                                                {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                            </div>
                                                    </div>
                                                </div>     



                                                <div class="tab-pane p-20" id="jp" role="tabpanel">
                                                        <ul class="nav customtab" role="tablist">
                                                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">eeeeeeeeeeeeeeeeee</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">eeeeeeeeeeeeeeeeee</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">eeeeeeeeeeeeeeeeee</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_form" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">eeeeeeeeeeeeeeeeee</span></a> </li>
                                                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">eeeeeeeeeeeeeeeeee</span></a> </li>
                                                        </ul>
                                                        <div class="tab-content tabcontent-border">
                                                                <div class="tab-pane p-20 active" id="permission" role="tabpanel">
                                                                {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="job_details" role="tabpanel">
                                                                {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                                                {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="wsa_form" role="tabpanel">
                                                                    {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                                </div>
                                            
                                                                <div class="tab-pane p-20" id="wsa_report" role="tabpanel">
                                                                    {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                                </div>
                                                        </div>
                                                    </div>     
    
                                                    



                                                    <div class="tab-pane p-20" id="financial" role="tabpanel">
                                                            <ul class="nav customtab" role="tablist">
                                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#permission" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_form" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wsa_report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">ffffffffffffffffff</span></a> </li>
                                                            </ul>
                                                            <div class="tab-content tabcontent-border">
                                                                    <div class="tab-pane p-20 active" id="permission" role="tabpanel">
                                                                    {{-- @include('cmrtw.caseMgmt.PL.ipPermission') --}}

                                                                    shahira
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="job_details" role="tabpanel">
                                                                    {{-- @include('cmrtw.caseMgmt.PL.jobDetails') --}}
                                                                    shahira
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                                                    {{-- @include('cmrtw.caseMgmt.PL.appointmentTrip') --}}
                                                                    shahira
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="wsa_form" role="tabpanel">
                                                                        {{-- @include('cmrtw.caseMgmt.appointmentTrip') --}}
                                                                        shahira
                                                                    </div>
                                                
                                                                    <div class="tab-pane p-20" id="wsa_report" role="tabpanel">
                                                                        {{-- @include('cmrtw.caseMgmt.supportDoc') --}}
                                                                        shahira
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
