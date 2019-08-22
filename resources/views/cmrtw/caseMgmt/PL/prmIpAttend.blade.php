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
                                      <label class="control-label">@lang('caseMgmt.attr.first_attend_date')</label><br>
                                      <input type="text" id="first_attend_date" class="form-control" disabled >
                                              
                                  </div>
                              </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseMgmt.attr.last_attend_date')</label><br>
                                        <input type="text" id="last_attend_date" class="form-control" disabled>
                                    </div>
                                </div>
                              
                        </div>
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>

        
        
        
            
        
        







       