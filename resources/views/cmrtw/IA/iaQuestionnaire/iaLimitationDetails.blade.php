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
                                <label class="control-label">@lang('caseMgmt.attr.face_limitation')</label>
                                <input type="text" id="face_limitation" class="form-control">
                                
                                
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.ob_equipment')</label>
                                
                                <select class="form-control" tabindex="1">
                                    <option value="">Please Select</option>
                                    <option value="orthotic">@lang('caseMgmt.attr.orthotic')</option>
                                    <option value="prosthetic">@lang('caseMgmt.attr.prosthetic')</option>
                                    <option value="recovery_equipment">@lang('caseMgmt.attr.recovery_equipment')</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.equipment')</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="yes22" name="yes21" class="custom-control-input">
                                    <label class="custom-control-label" for="yes22">@lang('caseMgmt.attr.yes')</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="no22" name="yes21" class="custom-control-input">
                                    <label class="custom-control-label" for="no22">@lang('caseMgmt.attr.no')</label>
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


