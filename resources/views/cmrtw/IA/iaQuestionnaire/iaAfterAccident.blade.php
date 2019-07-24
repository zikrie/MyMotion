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
                                    <label class="control-label">@lang('caseMgmt.attr.leisure_ques1')</label>
                                     <input type="text" id="leisure_ques" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.hobby')</label>
                                    <input type="text" id="hobby" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.sport')</label>
                                    <input type="text" id="sport" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.category')</label>
                                    <input type="text" id="category" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.social_activity')</label>
                                    <input type="text" id="social_activity" class="form-control">
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.level')</label>
                                    <input type="text" id="level" class="form-control">
                                </div>
                            </div>
                            
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>

          

