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
                                                @lang('caseMgmt.attr.rtw_status')
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('cmrtw.caseMgmt.rtwStatus')
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingTwo2">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                @lang('caseMgmt.attr.case_status_details')
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="card-body">
                                            @include('cmrtw.caseMgmt.caseStatusDetails')
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
    
    
    
    