<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJobDetJP">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJobDetJP" aria-expanded="false" aria-controls="collapseJobDetJP">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Job Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJobDetJP" class="collapse" role="tabpanel" aria-labelledby="headingJobDetJP">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jpIpDetails')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingLASERassestJP">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseLASERassestJP" aria-expanded="false" aria-controls="collapseLASERassestJP">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        LASER Assessment</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseLASERassestJP" class="collapse" role="tabpanel" aria-labelledby="headingLASERassestJP">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jpLaserAssess')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJopPlacIPDetailsJP">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJopPlacIPDetailsJP" aria-expanded="false" aria-controls="collapseJopPlacIPDetailsJP">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Job Placement Insured Person Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJopPlacIPDetailsJP" class="collapse" role="tabpanel" aria-labelledby="headingJopPlacIPDetailsJP">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jpIpPlacement')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJobPlacRepJP">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJobPlacRepJP" aria-expanded="false" aria-controls="collapseJobPlacRepJP">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Job Placement Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJobPlacRepJP" class="collapse" role="tabpanel" aria-labelledby="headingJobPlacRepJP">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jpReport')
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSearchJobActivityJP">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSearchJobActivityJP" aria-expanded="false" aria-controls="collapseSearchJobActivityJP">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Search Job Activity</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSearchJobActivityJP" class="collapse" role="tabpanel" aria-labelledby="headingSearchJobActivityJP">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jpSearchJob')
                            </div>
                        </div>
                    </div>



                   



                </div>
            </form>
        </div>
    </div>
</div>

                  

































