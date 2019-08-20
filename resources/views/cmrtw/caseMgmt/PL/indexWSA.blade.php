<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingPermissionWSA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapsePermissionWSA" aria-expanded="false" aria-controls="collapsePermissionWSA">
                                    <h5 class="card-title1" ><i class="fa fa-plus"></i>
                                        Permission</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapsePermissionWSA" class="collapse" role="tabpanel" aria-labelledby="headingPermissionWSA">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.ipPermission') 
                            </div>
                        </div>
                       
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJobDetailsWSA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJobDetailsWSA" aria-expanded="false" aria-controls="collapseJobDetailsWSA">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Job Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJobDetailsWSA" class="collapse" role="tabpanel" aria-labelledby="headingJobDetailsWSA">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.jobDetails') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingAppTripWSA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAppTripWSA" aria-expanded="false" aria-controls="collapseAppTripWSA">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Appointment Trip</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseAppTripWSA" class="collapse" role="tabpanel" aria-labelledby="headingAppTripWSA">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.appointmentTrip') 
                            </div>
                        </div>
                    </div>
                    

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingWSAform">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWSAform" aria-expanded="false" aria-controls="collapseWSAform">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        WSA Form</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseWSAform" class="collapse" role="tabpanel" aria-labelledby="headingWSAform">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.wsaForm') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingWSAReport">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWSAReport" aria-expanded="false" aria-controls="collapseWSAReport">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        WSA Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseWSAReport" class="collapse" role="tabpanel" aria-labelledby="headingWSAReport">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.wsaReport') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingDiscussion">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDiscussion" aria-expanded="false" aria-controls="collapseDiscussion">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.discussion')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseDiscussion" class="collapse" role="tabpanel" aria-labelledby="headingDiscussion">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.discussionResult')
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>

                  

































