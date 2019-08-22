<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/registrationrtw">
                        <div class="form-body">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.recovery_type')</label><br>
                                                <div>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optradio" checked>@lang('caseMgmt.attr.prm')
                                                          </label>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="optradio">@lang('caseMgmt.attr.osm_psm_opm')
                                                          </label>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="optradio">@lang('caseMgmt.attr.psm')
                                                          </label>
                                                          <label class="radio-inline">
                                                                  <input type="radio" name="optradio">@lang('caseMgmt.attr.ism')
                                                          </label>
                                                  </div>
                                                    
                                                    
                                                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.supporting_document')</label><br>
                                                    <span class="choosefile"><input type="file" name=""id="" required>
                                                    </span>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                                <input type="text" id="remarks" class="form-control" >
                                            </div>
                                        </div>
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        
        
        
            
        
        