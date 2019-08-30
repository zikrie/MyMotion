<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.leisure_ques') <span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="leisure_ques1" name="leisure_ques" class="custom-control-input" onclick="leisureFunc1()" required>
                                            <label class="custom-control-label" for="leisure_ques1">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="leisure_ques2" name="leisure_ques" class="custom-control-input" onclick="leisureFunc2()" required>
                                            <label class="custom-control-label" for="leisure_ques2">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group" id="leisureHide" style="display:none;">    
                            <div id="accordionLesisure" role="tablist" class="accordion" >
                                <!-- Initial Assessment Before Accident Details--> 
                                <div class="card m-b-0">
                                    <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingBA">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseBA" aria-expanded="true" aria-controls="collapseBA">
                                                <i class="fa fa-plus"></i> @lang('ia.title17')
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseBA" class="collapse" role="tabpanel" aria-labelledby="headingBA">
                                        <div class="card-body">
                                            @include('cmrtw.IA.iaQuestionnaire.iaBeforeAccident')
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Initial Assessment After Accident Details--> 
                                <div class="card m-b-0">
                                    <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseAA" aria-expanded="false" aria-controls="collapseAA">
                                                <i class="fa fa-plus"></i>@lang('ia.title18')
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseAA" class="collapse" role="tabpanel" aria-labelledby="headingAA">
                                        <div class="card-body">
                                            @include('cmrtw.IA.iaQuestionnaire.iaAfterAccident')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

    function leisureFunc1() {
        $('#leisureHide').show();
    }
    function leisureFunc2() {
        $('#leisureHide').hide();
    }

</script>