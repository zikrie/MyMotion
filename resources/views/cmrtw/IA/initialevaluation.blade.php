<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div class="card-body">
                    
                    <!-- Initial Assessment question -->

                    <div id="accordion2" role="tablist" class="accordion" >
                    
                        <!-- Initial Assessment appointmentdetails-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne1">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                                    @lang('ia.title2')</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaAppointmentDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment employementDetails-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                        @lang('ia.title3')</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaEmployementDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment OB Employment--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingFour4">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title5')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaOBemployment')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Education and Skills--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingFive5">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title6')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaEduSkillsDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Mobility Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingSix6">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title7')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaMobilityDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Dependent Living Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingSeven7">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title8')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaDependentLivingDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Disabled Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingEight8">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title9')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaDisabledDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Treatment Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingNine9">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title10')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaTreatmentDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Limitation Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen10">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title11')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaLimitationDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Treatment Appointment Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen11">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen11" aria-expanded="false" aria-controls="collapseTen11">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title12')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen11" class="collapse" role="tabpanel" aria-labelledby="headingTen11">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaTreatmentAppointmentDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment VASS Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen12">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen12" aria-expanded="false" aria-controls="collapseTen12">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title13')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen12" class="collapse" role="tabpanel" aria-labelledby="headingTen12">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaVassDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment DASS21 Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen13">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen13" aria-expanded="false" aria-controls="collapseTen13">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title14')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen13" class="collapse" role="tabpanel" aria-labelledby="headingTen13">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaDassDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Activity of daily living Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen14">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen14" aria-expanded="false" aria-controls="collapseTen14">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('ia.title15')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen14" class="collapse" role="tabpanel" aria-labelledby="headingTen14">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaDailyActDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Leisure Activity Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen15">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen15" aria-expanded="false" aria-controls="collapseTen15">
                                    <h4 class="card-title"><i class="fa fa-plus"></i>
                                        @lang('ia.title16')
                                    </h4>  
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen15" class="collapse" role="tabpanel" aria-labelledby="headingTen15">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaLeisureActDetails')
                                </div>
                            </div>
                        </div>
                        <!-- Initial Assessment Work Motivation Details--> 
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingTen18">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen18" aria-expanded="false" aria-controls="collapseTen18">
                                    <h4 class="card-title"><i class="fa fa-plus"></i>
                                        @lang('ia.title19')
                                    </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTen18" class="collapse" role="tabpanel" aria-labelledby="headingTen18">
                                <div class="card-body">
                                    @include('cmrtw.IA.iaQuestionnaire.iaWorkMotivation')
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="form-actions">
                        <!-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('offerconfirmation.attr.submit')</button> -->
                        <button type="button"class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#iaModal" id="iaResult" onclick="viewIAresult()">@lang('offerconfirmation.attr.submit')</button>
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>
<!--button View-->
<div class="modal fade" id="iaModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="/PERKESO_UI/assets/images/perkeso.jpg" class="dark-logo" style="width:50px;height:50px;"/>
                <h4 class="modal-title" id="myLargeModalLabel">Summary of Initial Rehabilitation Assessment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                @include('cmrtw.IA.iaResult')
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="nextTab()">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function viewIAresult(){
        document.getElementById("iaResult").style.backgroundColor = "green";

    }

</script>

