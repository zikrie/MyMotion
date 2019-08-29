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
                                                <label class="control-label">@lang('caseMgmt.attr.toilet')</label>
                                                <input type="text" id="toilet" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.pantry')</label>
                                                    <input type="text" id="pantry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label>@lang('caseMgmt.attr.prayer_room')</label>
                                                    <input type="text"  id="prayer_room" class="form-control">
                                             </div>
                                                </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('caseMgmt.attr.car_park')</label>
                                                    <input type="text" id="car_park" class="form-control">
                                                </div>
                                            </div>
                                            

                                                 <div class="col-md-4">
                                                         <div class="form-group">
                                                        <label>@lang('caseMgmt.attr.entrance')</label>
                                                        <input type="text" id="entrance" class="form-control">
                                                     </div>
                                                 </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                       <label>@lang('CaseMgmt.attr.exit')</label>
                                                       <input type="text" id="exit" class="form-control">
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group">
                                                          <label>@lang('caseMgmt.attr.other')</label>
                                                         <textarea class="form-control" rows="5" type="textarea"  id="other"></textarea>
                                                         {{-- <input type="text" id="justification" class="form-control"> --}}
                                                            </div>
                                                     </div>
                                    
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    


            

