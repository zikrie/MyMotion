<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSuppApprovalVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSuppApprovalVTM" aria-expanded="false" aria-controls="collapseSuppApprovalVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Supplier Approval</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSuppApprovalVTM" class="collapse" role="tabpanel" aria-labelledby="headingSuppApprovalVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmSupplierApproval')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingReqForQuoVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseReqForQuoVTM" aria-expanded="false" aria-controls="collapseReqForQuoVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Request for quotation</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseReqForQuoVTM" class="collapse" role="tabpanel" aria-labelledby="headingReqForQuoVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmRequestQuo')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingQuoVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseQuoVTM" aria-expanded="false" aria-controls="collapseQuoVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Quotation</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseQuoVTM" class="collapse" role="tabpanel" aria-labelledby="headingQuoVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmQuotation')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSelectedSuppInfoVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSelectedSuppInfoVTM" aria-expanded="false" aria-controls="collapseSelectedSuppInfoVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Selected Supplier Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSelectedSuppInfoVTM" class="collapse" role="tabpanel" aria-labelledby="headingSelectedSuppInfoVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmSelectedSupplier')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingCourseInfoVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCourseInfoVTM" aria-expanded="false" aria-controls="collapseCourseInfoVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Course Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseCourseInfoVTM" class="collapse" role="tabpanel" aria-labelledby="headingCourseInfoVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmCourseDetails')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingCMapprovedVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCMapprovedVTM" aria-expanded="false" aria-controls="collapseCMapprovedVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        CM - Approved</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseCMapprovedVTM" class="collapse" role="tabpanel" aria-labelledby="headingCMapprovedVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmCmApproved')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSCMHQapprovedVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSCMHQapprovedVTM" aria-expanded="false" aria-controls="collapseSCMHQapprovedVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        SCM HQ - Approved</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSCMHQapprovedVTM" class="collapse" role="tabpanel" aria-labelledby="headingSCMHQapprovedVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmScmApproved')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingIPAttendanceInfoVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseIPAttendanceInfoVTM" aria-expanded="false" aria-controls="collapseIPAttendanceInfoVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Insured Person Attendance Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseIPAttendanceInfoVTM" class="collapse" role="tabpanel" aria-labelledby="headingIPAttendanceInfoVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmIpAttend')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingVTreportVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseVTreportVTM" aria-expanded="false" aria-controls="collapseVTreportVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        VT Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseVTreportVTM" class="collapse" role="tabpanel" aria-labelledby="headingVTreportVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmReport')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingBusinessInfoIPVTM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBusinessInfoIPVTM" aria-expanded="false" aria-controls="collapseBusinessInfoIPVTM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Business Information Insured Person </h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseBusinessInfoIPVTM" class="collapse" role="tabpanel" aria-labelledby="headingBusinessInfoIPVTM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vtmIpBusiness')
                            </div>
                        </div>
                    </div>





                </div>
            </form>
        </div>
    </div>
</div>

                  

































