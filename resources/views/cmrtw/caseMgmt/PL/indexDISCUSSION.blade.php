<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >


                   
                   <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingDissCategoryDISCUSSION">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDissCategoryDISCUSSION" aria-expanded="false" aria-controls="collapseDissCategoryDISCUSSION">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Discussion Category</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseDissCategoryDISCUSSION" class="collapse" role="tabpanel" aria-labelledby="headingDissCategoryDISCUSSION">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.discussionCat')
                            </div>
                        </div>
                    </div> 


                     <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingIPcommDetDISC">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseIPcommDetDISC" aria-expanded="false" aria-controls="collapseIPcommDetDISC">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Insured Person Communication Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseIPcommDetDISC" class="collapse" role="tabpanel" aria-labelledby="headingIPcommDetDISC">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.PL.discussionGrouping')
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingGroupDiscussDetDISCUSS">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseGroupDiscussDetDISCUSS" aria-expanded="false" aria-controls="collapseGroupDiscussDetDISCUSS">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Group Discussion Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseGroupDiscussDetDISCUSS" class="collapse" role="tabpanel" aria-labelledby="headingGroupDiscussDetDISCUSS">
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

                  

































