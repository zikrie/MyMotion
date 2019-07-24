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
                                <label class="control-label">@lang('caseMgmt.attr.appointment_confirm')</label>
                                 <select class="form-control">

                                    <option value="">Please Select</option>
                                    <option value="yes">@lang('caseMgmt.attr.yes')</option>
                                    <option value="no">@lang('caseMgmt.attr.no')</option>

                                </select>
                                
                                
                            </div>
                        </div>

                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.appointment_date')</label>
                                <input type="date" id="appointment_date" class="form-control">
                                
                                
                            </div>
                        </div>

                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_place')</label>
                                <input type="date" id="treatment_place" class="form-control">
                               
                            </div>
                        </div>

                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.department_name')</label>
                                <select class="form-control" tabindex="1">
                                    <option value="">Please Select</option>
                                    <option value="general_department">@lang('caseMgmt.attr.general_department')</option>
                                    <option value="rehab_department">@lang('caseMgmt.attr.rehab_department')</option>
                                    <option value="mental_department">@lang('caseMgmt.attr.mental_department')</option>
                                    <option value="surgery_department">@lang('caseMgmt.attr.surgery_department')</option>
                                    <option value="intensive_department">@lang('caseMgmt.attr.intensive_department')</option>
                                    <option value="nuerosurgery_department">@lang('caseMgmt.attr.nuerosurgery_department')</option>
                                    <option value="ortho_department">@lang('caseMgmt.attr.ortho_department')</option>
                                    <option value="plastic_department">@lang('caseMgmt.attr.plastic_department')</option>
                                    <option value="oftal_department">@lang('caseMgmt.attr.oftal_department')</option>
                                    <option value="oral_department">@lang('caseMgmt.attr.oral_department')</option>
                                    <option value="emergency_department">@lang('caseMgmt.attr.emergency_department')</option>
                                    <option value="otorhino_department">@lang('caseMgmt.attr.otorhino_department')</option>
                                    <option value="radio_department">@lang('caseMgmt.attr.radio_department')</option>
                                    <option value="patho_department">@lang('caseMgmt.attr.patho_department')</option>
                                    
                                    
                                </select>
                                
                                
                            </div>
                        </div>

                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
</div>


