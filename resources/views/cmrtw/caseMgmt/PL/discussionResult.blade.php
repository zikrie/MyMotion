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
                                    <label class="control-label">@lang('caseMgmt.attr.discuss_comment')</label>
                                    <input type="text" id="discuss_comment" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.supporting_document')</label>
                                    <br>
                                    <span class="choosefile"><input type="file" name="" id="" required></span>
                                </div>
                            </div>   
                        </div>
                </div>
            
        </form>
        </div>
        </div>
        </div>
        </div>
        
        
        
        
        
        