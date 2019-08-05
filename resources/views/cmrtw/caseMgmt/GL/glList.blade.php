<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw">
                    <div class="form-body">
                        {{-- <h3 class="card-title">@lang('benefitDetails.insured_details')</h3> --}}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            @lang('caseMgmt.attr.gl_letter')
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('cmrtw.caseMgmt.GL.glDetails') --}}
                                      	{{-- first div --}}
										<div class="card m-b-0">
                                                <div class="card-header" role="tab" id="headingThree33">
                                                    <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                                                            @lang('caseMgmt.attr.supplier')
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree33" class="collapse" role="tabpanel" aria-labelledby="headingThree33">
                                                    <div class="card-body">
                                                        @include('cmrtw.caseMgmt.GL.supplierDetails')
                                                    </div>
                                                </div>
                                            </div>
    
                                            <br>
                                            {{-- second div --}}
                                            <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="headingFour44">
                                                    <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour44" aria-expanded="false" aria-controls="collapseFour44">
                                                            @lang('caseMgmt.attr.gl_letter')
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseFour44" class="collapse" role="tabpanel" aria-labelledby="headingFour44">
                                                    <div class="card-body">
                                                            @include('cmrtw.caseMgmt.GL.glDetails')
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <br>
                                             {{-- third div --}}
                                             <div class="card m-b-0">
                                                    <div class="card-header" role="tab" id="headingFive55">
                                                        <h6 class="mb-0">
                                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive55" aria-expanded="false" aria-controls="collapseFive55">
                                                                @lang('caseMgmt.attr.previous_gl')
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseFive55" class="collapse" role="tabpanel" aria-labelledby="headingFive55">
                                                        <div class="card-body">
                                                                @include('cmrtw.caseMgmt.GL.previousGl')
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            @lang('caseMgmt.attr.recommend_cm')
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        @include('cmrtw.caseMgmt.GL.recommendCM')
                                    </div>
                                </div>
                            </div>

                            <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingThree3">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                                @lang('caseMgmt.attr.scm_approval')
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                        <div class="card-body">
                                            @include('cmrtw.caseMgmt.GL.scmhqApproval')
                                        </div>
                                    </div>
                                </div>
                        </div>


                    </div>


                    {{-- <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('registrationRTW.clear')</button>
                        <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                        @lang('registrationRTW.save')</button>
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
</div>



