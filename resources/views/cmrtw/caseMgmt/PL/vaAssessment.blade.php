<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/registrationrtw" method="POST">
                    <div class="form-body">

                            <div id="accordionLesisure" role="tablist" class="accordion" >
                                    
                                
                                <div class="card m-b-0">
                                        <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingVocaAssessDet">
                                            <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseVocaAssessDet" aria-expanded="true" aria-controls="collapseVocaAssessDet">
                                                    <i class="fa fa-plus"></i> Vocational Assessment Details
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseVocaAssessDet" class="collapse" role="tabpanel" aria-labelledby="headingVocaAssessDet">
                                            <div class="card-body">
                                                
                                                    <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('vaAssessment.appraisal')</label>
                                                                    <select class="form-control clearFields" name="vaob">
                                                                        <option value="">Please Select </option>
                                                                        <option value="vawithob">@lang('vaAssessment.vawithob')</option>
                                                                        <option value="vabyob">@lang('vaAssessment.vabyob')</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('vaAssessment.vabyob')</label>
                                                                        <select class="form-control clearFields" name="vabyob">
                                                                            <option value="">Please Select </option>
                                                                            <option value="online">@lang('vaAssessment.online')</option>
                                                                            <option value="physicalform">@lang('vaAssessment.physicalform')</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('vaAssessment.appraisaldate')</label>
                                                                    <input type="date" id="appraisaldate" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                                @include('cmrtw.caseMgmt.PL.vaAssessDetails')
                                                            </div>
    
                                            </div>
                                        </div>
                                    </div>
    
                                    <br>




                                    <div class="card m-b-0">
                                            <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingVocatAsessResult">
                                                <h5 class="mb-0">                           
                                                    <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapseVocatAsessResult" aria-expanded="true" aria-controls="collapseVocatAsessResult">
                                                        <i class="fa fa-plus"></i> @lang('caseMgmt.attr.va_title1')
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseVocatAsessResult" class="collapse" role="tabpanel" aria-labelledby="headingVocatAsessResult">
                                                <div class="card-body">
                                                    
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.realistic_score')</label>
                                                                        <input type="text" id="realistic_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.investigative_score')</label>
                                                                        <input type="text" id="investigative_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.artistic_score')</label>
                                                                        <input type="text" id="artistic_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.social_score')</label>
                                                                        <input type="text" id="social_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.entrising_score')</label>
                                                                        <input type="text" id="entrising_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.conventional_score')</label>
                                                                        <input type="text" id="conventional_score" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
        
                                                </div>
                                            </div>
                                        </div>
        
                                        <br>



                                        <div class="card m-b-0">
                                                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingPersonaliti">
                                                    <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionLeisure" href="#collapsePersonaliti" aria-expanded="true" aria-controls="collapsePersonaliti">
                                                            <i class="fa fa-plus"></i> @lang('caseMgmt.attr.ip_personality')
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsePersonaliti" class="collapse" role="tabpanel" aria-labelledby="headingPersonaliti">
                                                    <div class="card-body">
                                                        
                                                          
                                                            <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.ip_personality1')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="ip_personality1"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.ip_personality2')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="ip_personality2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('caseMgmt.attr.ip_personality3')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="ip_personality3"></textarea>
                                                                    </div>
                                                                </div>
                                                                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                                                SAVE & CONTINUE</button>
                                                                <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                                                                <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button> --}}
                                                            
            
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



