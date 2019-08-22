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
                                    <label class="control-label">@lang('ia.attr.initialAssessTime') <span class="text-danger">*</span></label>
                                    <input type="time" id="initialAssessTime" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('ia.attr.initialAssessDate') <span class="text-danger">*</span></label>
                                    <input type="date" id="initialAssessTime" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('ia.attr.initialAssessLoc') <span class="text-danger">*</span></label>
                                    <input type="text" id="initialAssessLoc" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




































