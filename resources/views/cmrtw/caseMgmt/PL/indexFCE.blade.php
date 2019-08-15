<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJobDetipFCE">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJobDetipFCE" aria-expanded="false" aria-controls="collapseJobDetipFCE">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Job Details Insured Person</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJobDetipFCE" class="collapse" role="tabpanel" aria-labelledby="headingJobDetipFCE">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.fceJobDetails')
                            </div>
                        </div>
                    </div>


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingFCEdetails">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFCEdetails" aria-expanded="false" aria-controls="collapseFCEdetails">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        FCE Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFCEdetails" class="collapse" role="tabpanel" aria-labelledby="headingFCEdetails">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.fceDetails')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingFCEform">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFCEform" aria-expanded="false" aria-controls="collapseFCEform">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        FCE Form</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFCEform" class="collapse" role="tabpanel" aria-labelledby="headingFCEform">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.fceForm') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingFCEReport">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFCEReport" aria-expanded="false" aria-controls="collapseFCEReport">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        FCE Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFCEReport" class="collapse" role="tabpanel" aria-labelledby="headingFCEReport">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.fceReport') 
                            </div>
                        </div>
                    </div>



                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingmodifiOfWorkFCE">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapsemodifiOfWorkFCE" aria-expanded="false" aria-controls="collapsemodifiOfWorkFCE">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Modification Of Work</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapsemodifiOfWorkFCE" class="collapse" role="tabpanel" aria-labelledby="headingmodifiOfWorkFCE">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.fceModificationWork')
                            </div>
                        </div>
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>

                  

































