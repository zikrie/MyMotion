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
                                                    <label class="control-label">@lang('caseMgmt.attr.vtm_decision')</label>
                                                    <select class="form-control" tabindex="1">
                                                            {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
                                                            <option value="vtm_decision1">@lang('caseMgmt.attr.vtm_decision1')</option>
                                                            <option value="no">@lang('caseMgmt.attr.no')</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('caseMgmt.attr.approval_name')</label>
                                                        <input type="text" id="approval_name" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('caseMgmt.attr.disapproval_reason')</label>
                                                            <input type="text" id="disapproval_reason" class="form-control">
                                                        </div>
                                                    </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.vtm_note')</label>
                                                        <input type="text"  id="vtm_note" class="form-control">
                                                 </div>
                                                    </div>
                                                <div class="col-md-4">
                                                     <div class="form-group">
                                                         <label>@lang('caseMgmt.attr.approval_date')</label>
                                                         <input type="date" class="form-control" disabled>
                                                      </div>
                                                 </div>
                                    
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    


            

