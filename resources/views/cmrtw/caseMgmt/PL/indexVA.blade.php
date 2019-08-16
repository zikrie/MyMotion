<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingVocaAssessDetVA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseVocaAssessDetVA" aria-expanded="false" aria-controls="collapseVocaAssessDetVA">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Vocational Assessment Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseVocaAssessDetVA" class="collapse" role="tabpanel" aria-labelledby="headingVocaAssessDetVA">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vaAssessment')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingIPVerifiVA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseIPVerifiVA" aria-expanded="false" aria-controls="collapseIPVerifiVA">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Insured Person Verification</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseIPVerifiVA" class="collapse" role="tabpanel" aria-labelledby="headingIPVerifiVA">
                            <div class="card-body">
                               
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingRecommByCaseManagerVA">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommByCaseManagerVA" aria-expanded="false" aria-controls="collapseRecommByCaseManagerVA">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Recommendation By Case Manager</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseRecommByCaseManagerVA" class="collapse" role="tabpanel" aria-labelledby="headingRecommByCaseManagerVA">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.vaRecommendation')
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

                  

































