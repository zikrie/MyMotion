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
                                                        <i class="fa fa-plus"></i> Vocational Assessment Result
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseVocatAsessResult" class="collapse" role="tabpanel" aria-labelledby="headingVocatAsessResult">
                                                <div class="card-body">
                                                    
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorrealistik')</label>
                                                                        <input type="text" id="skorrealistik" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorinvestigatif')</label>
                                                                        <input type="text" id="skorinvestigatif" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorartistik')</label>
                                                                        <input type="text" id="skorartistik" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorsosial')</label>
                                                                        <input type="text" id="skorsosial" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorenterprising')</label>
                                                                        <input type="text" id="skorenterprising" class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.skorconventional')</label>
                                                                        <input type="text" id="skorconventional" class="form-control" value="">
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
                                                            <i class="fa fa-plus"></i> Personaliti Orang Berinsurans Berdasarkan Keputusan Penilaian
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsePersonaliti" class="collapse" role="tabpanel" aria-labelledby="headingPersonaliti">
                                                    <div class="card-body">
                                                        
                                                          
                                                            <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.jenispersonaliti1')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="jenispersonaliti1"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.jenispersonaliti2')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="jenispersonaliti2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">@lang('vaAssessment.jenispersonaliti3')</label>
                                                                        <textarea class="form-control" rows="5" type="textarea"  id="jenispersonaliti3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                                                SAVE & CONTINUE</button>
                                                                <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
                                                                <button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/homertw'">@lang('rtw_eligibility.cancel')</button>
                                                            
            
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



