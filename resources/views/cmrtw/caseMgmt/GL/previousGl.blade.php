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
                                                    <label class="control-label">@lang('caseMgmt.attr.supplier_name')</label>
                                                    <input type="text" id="supplier_name" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.valid_from')</label>
                                                    <input type="date" id="valid_from" class="form-control" disabled>
                                                    </div>
                                            </div> <div class="col-md-6">
                                             <div class="form-group">
                                                     <label class="control-label">@lang('caseMgmt.attr.valid_to')</label>
                                                     <input type="date" id="valid_to" class="form-control">
                                            </div>
                                            
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



            

