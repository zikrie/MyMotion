<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div id="accordion2" role="tablist" class="accordion" >           
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2" style="background-color: #FFFFFF;">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.previous_gl')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.PL.prmPreviousGl') 
                                    </div>
                                </div>
                            </div>

                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingThree3" style="background-color: #FFFFFF;" >
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.gl_letter')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.PL.prmGlDetails')
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingFour4" style="background-color: #FFFFFF;" >
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapse44" aria-expanded="false" aria-controls="collapse44"><h5 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('caseMgmt.attr.cancelation')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse44" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.PL.prmGlCancel')
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


