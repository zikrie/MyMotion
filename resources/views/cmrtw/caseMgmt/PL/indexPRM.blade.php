<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingRecoveryInfoPRM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecoveryInfoPRM" aria-expanded="false" aria-controls="collapseRecoveryInfoPRM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Recovery Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseRecoveryInfoPRM" class="collapse" role="tabpanel" aria-labelledby="headingRecoveryInfoPRM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.prmRecovery')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingRehabReportPRM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRehabReportPRM" aria-expanded="false" aria-controls="collapseRehabReportPRM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Rehab Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseRehabReportPRM" class="collapse" role="tabpanel" aria-labelledby="headingRehabReportPRM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.prmRehabReport')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSessInfoPRM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSessInfoPRM" aria-expanded="false" aria-controls="collapseSessInfoPRM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Session Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSessInfoPRM" class="collapse" role="tabpanel" aria-labelledby="headingSessInfoPRM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.prmSessionDetails')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingIPAttendanceInfoPRM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseIPAttendanceInfoPRM" aria-expanded="false" aria-controls="collapseIPAttendanceInfoPRM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Insured Person Attendance Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseIPAttendanceInfoPRM" class="collapse" role="tabpanel" aria-labelledby="headingIPAttendanceInfoPRM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.prmIpAttend')
                            </div>
                        </div>
                    </div>





                </div>
            </form>
        </div>
    </div>
</div>

                  

































