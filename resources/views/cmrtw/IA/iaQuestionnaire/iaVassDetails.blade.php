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
                                    <label class="control-label">@lang('caseMgmt.attr.skillsScore')</label>
                                    <input type="text" id="depression" class="form-control">  
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.career')</label>
                                    <input type="TEXT" id="anxiety" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.independence')</label>
                                    <input type="TEXT" id="stress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.self-esteem')</label>
                                    <input type="TEXT" id="stress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.confidence')</label>
                                    <input type="TEXT" id="stress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.health')</label>
                                    <input type="TEXT" id="stress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.pain')</label>
                                    <input type="TEXT" id="stress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                                    <input type="TEXT" id="remarks" class="form-control">
                                </div>
                            </div>
                        </div>     
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


