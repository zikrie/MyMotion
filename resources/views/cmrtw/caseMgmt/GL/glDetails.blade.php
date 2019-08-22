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
                                                <label class="control-label">@lang('caseMgmt.attr.plan_type')</label>
                                                <select name="select_opt" id="select_opt" class="form-control" required> 
                                                    <option value="">Please Select</option>
                                                    <option value="discussion">@lang('caseMgmt.attr.discussion')</option>
                                                    <option value="prm">@lang('caseMgmt.attr.prm')</option>
                                                    <option value="wsa">@lang('caseMgmt.attr.wsa')</option>
                                                    <option value="fce">@lang('caseMgmt.attr.fce')</option>
                                                    <option value="osm_psm_opm">@lang('caseMgmt.attr.osm_psm_opm')</option>
                                                    <option value="mm">@lang('caseMgmt.attr.mm')</option>
                                                    <option value="va_title">@lang('caseMgmt.attr.va_title')</option>
                                                    <option value="jp">@lang('caseMgmt.attr.jp')</option>
                                                    <option value="financial">@lang('caseMgmt.attr.financial')</option>
                                                    <option value="mobility">@lang('caseMgmt.attr.mobility')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.gl_number')</label>
                                                    <input type="text" id="gl_number" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.gl_type')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="new">@lang('caseMgmt.attr.new')</option>
                                                        <option value="extension">@lang('caseMgmt.attr.extension')</option>
                                                        
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.service_type')</label>
                                                    <div>
                                                        <label class="radio-inline">
                                                                <input type="radio" name="optradio">@lang('caseMgmt.attr.basic_equip')
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" name="optradio">@lang('caseMgmt.attr.advanced_equip')
                                                              </label>
                                                      
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.modalitity')</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" required> 
                                                        <option value="">Please Select</option>
                                                        <option value="modalitit1">@lang('caseMgmt.attr.modalitit1')</option>
                                                        <option value="modalitity2">@lang('caseMgmt.attr.modalitity2')</option>
                                                        <option value="modalitity3">@lang('caseMgmt.attr.modalitity3')</option>
                                                        <option value="modalitity4">@lang('caseMgmt.attr.modalitity4')</option>
                                                        <option value="modalitity5">@lang('caseMgmt.attr.modalitity5')</option>
                                                        
                                                    </select>          
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseMgmt.attr.ob_recovery')</label>
                                                <input type="date" id="ob_recovery" class="form-control" disabled>
                                            </div>
                                    </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.valid_from')</label>
                                                    <input type="date" id="valid_from" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.valid_to')</label>
                                                    <input type="date" id="valid_to" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.advanced_justification')</label>
                                                    <input type="text" id="advanced_justification" class="form-control" disabled>
                                                    {{-- <textarea class="form-control" rows="5" type="textarea"  id="advanced_justification"></textarea> --}}
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.prepared_by')</label>
                                                    <input type="text" id="prepared_by" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.prepared_for')</label>
                                                    <input type="text" id="prepared_for" class="form-control" disabled>
                                                </div>
                                        </div>

                                      
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   


            

