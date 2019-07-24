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
                                <label class="control-label">@lang('caseMgmt.attr.depression')</label>
                                <input type="text" id="depression" class="form-control">
                                
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                     <label class="control-label">@lang('caseMgmt.attr.anxiety')</label>
                     <input type="TEXT" id="anxiety" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.stress')</label>
                                <input type="TEXT" id="stress" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
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


