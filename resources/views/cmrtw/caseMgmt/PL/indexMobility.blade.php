<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingMobilityDetails">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMobilityDetails" aria-expanded="false" aria-controls="collapseMobilityDetails">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseMobilityDetails" class="collapse" role="tabpanel" aria-labelledby="headingMobilityDetails">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobMobiliti')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEquipAndGuardMobility">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEquipAndGuardMobility" aria-expanded="false" aria-controls="collapseEquipAndGuardMobility">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title1')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseEquipAndGuardMobility" class="collapse" role="tabpanel" aria-labelledby="headingEquipAndGuardMobility">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobGuardian')
                            </div>
                        </div>
                    </div>

                    
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTRRCofficDetMobility">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTRRCofficDetMobility" aria-expanded="false" aria-controls="collapseTRRCofficDetMobility">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title2')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTRRCofficDetMobility" class="collapse" role="tabpanel" aria-labelledby="headingTRRCofficDetMobility">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobTrrcOffDetail') 
                            </div>
                        </div>
                    </div>


                    
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingCaseNoteMobility">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseNoteMobility" aria-expanded="false" aria-controls="collapseCaseNoteMobility">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.casenote_info')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseCaseNoteMobility" class="collapse" role="tabpanel" aria-labelledby="headingCaseNoteMobility">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobNotakes') 
                            </div>
                        </div>
                    </div> --}}



                    
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingAOMapprovMobility">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAOMapprovMobility" aria-expanded="false" aria-controls="collapseAOMapprovMobility">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title3')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseAOMapprovMobility" class="collapse" role="tabpanel" aria-labelledby="headingAOMapprovMobility">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobAomapproval')
                            </div>
                        </div>
                    </div>


                    
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJournVerifiReportMobility">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJournVerifiReportMobility" aria-expanded="false" aria-controls="collapseJournVerifiReportMobility">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title4')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJournVerifiReportMobility" class="collapse" role="tabpanel" aria-labelledby="headingJournVerifiReportMobility">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobJourneyCM') 
                            </div>
                        </div>
                    </div>


                    
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingJourneyVerifyRepHQSCM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseJourneyVerifyRepHQSCM" aria-expanded="false" aria-controls="collapseJourneyVerifyRepHQSCM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        @lang('caseMgmt.attr.mobility_title5')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseJourneyVerifyRepHQSCM" class="collapse" role="tabpanel" aria-labelledby="headingJourneyVerifyRepHQSCM">
                            <div class="card-body">
                            @include('cmrtw.caseMgmt.PL.mobJourneyHQSCM')
                            </div>
                        </div>
                    </div>


                   
                   



                </div>
            </form>
        </div>
    </div>
</div>

                  

































