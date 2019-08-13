<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
               
                <div id="accordion2" role="tablist" class="accordion" >
                  
                    
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Insured Person Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                @include('cmrtw.caseMgmt.MM.insuredPersonDetailsMM') 
                            </div>
                        </div>
                    </div> --}}
                    

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTwo2">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    <h5 class="card-title1" ><i class="fa fa-plus"></i>
                                        RTW Planning Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                            <div class="card-body">
                                 @include('cmrtw.caseMgmt.MM.RTWplanningInfo') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading3">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Modifications History Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="card-body">
                                 @include('cmrtw.caseMgmt.MM.modifyHistoryInfoMM') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading4">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                       Modifications Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="card-body">
                                 @include('cmrtw.caseMgmt.MM.modifyInfoMM') 
                            </div>
                        </div>
                    </div>
                    

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading5">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                       Request For Quotation</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.reqForQuotation') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading6">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Supplier Details</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.supplierDetail') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading7">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        SCM Session (HQ) for JKK Meeting</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.scmSession') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading8">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        JKK Meeting (AM)</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.jkkMeeting') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading9">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Supplier Information Selected</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.suppInfoSelected') 
                            </div>
                        </div>
                    </div>


                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading10">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Modifications Report</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.modifiReport') 
                            </div>
                        </div>
                    </div>

                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="heading11">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    <h5 class="card-title1"><i class="fa fa-plus"></i>
                                        Case Note Information</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11">
                            <div class="card-body">
                                    @include('cmrtw.caseMgmt.MM.caseNoteInfo') 
                            </div>
                        </div>
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>

                  

































