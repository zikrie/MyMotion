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
                                    <div class="card-header" role="tab" id="headingOne1" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                @lang('caseMgmt.attr.rehab_claim')</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('cmrtw.caseMgmt.RA.rehabClaim')
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingTwo2" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                @lang('caseMgmt.attr.previous_benefit')</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="card-body">
                                            @include('cmrtw.caseMgmt.RA.previousRehabAllowance')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingThree3" style="background-color: #FFFFFF;">
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                    @lang('caseMgmt.attr.recommend_cm')</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                            <div class="card-body">
                                                @include('cmrtw.caseMgmt.RA.recommendCm')
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
    
    
    
    