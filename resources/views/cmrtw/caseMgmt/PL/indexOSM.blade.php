<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingApplicationOSM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicationOSM" aria-expanded="false" aria-controls="collapseApplicationOSM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Application</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseApplicationOSM" class="collapse" role="tabpanel" aria-labelledby="headingApplicationOSM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.osmApplication')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingDeciFeedbackOSM">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDeciFeedbackOSM" aria-expanded="false" aria-controls="collapseDeciFeedbackOSM">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Decision Feedback</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseDeciFeedbackOSM" class="collapse" role="tabpanel" aria-labelledby="headingDeciFeedbackOSM">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.osmFeedback')
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

                  

































