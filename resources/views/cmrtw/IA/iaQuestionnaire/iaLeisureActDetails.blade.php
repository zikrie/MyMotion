<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
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
</script>