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
                                    <label class="control-label">@lang('caseMgmt.attr.stillActivity')</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="yes23" name="yes23" class="custom-control-input">
                                        <label class="custom-control-label" for="yes23">@lang('caseMgmt.attr.yes')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="no23" name="yes23" class="custom-control-input">
                                        <label class="custom-control-label" for="no23">@lang('caseMgmt.attr.no')</label>
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