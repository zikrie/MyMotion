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
                                <label class="control-label">@lang('caseMgmt.attr.appointment_confirm')<span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="appointment_confirmyes" name="appointment_confirm" class="custom-control-input" onclick="MedicalAppoinment()" required>
                                            <label class="custom-control-label" for="appointment_confirmyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="appointment_confirmno" name="appointment_confirm" class="custom-control-input" onclick="MedicalAppoinment2()" required>
                                            <label class="custom-control-label" for="appointment_confirmno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                              <div class="form-group">
                                <div id="hideMedAppointment" class="form-group" style="display:none">
                                <label class="control-label">@lang('caseMgmt.attr.multiple_appointment')<span class="text-danger">*</span></label>
                                    <div class="row p-l-20">
                                        <div class="custom-control custom-radio" >
                                            <input type="radio" id="multiple_appointmentyes" name="multiple_appointment" class="custom-control-input" onclick="MultipleAppoinment()" required>
                                            <label class="custom-control-label" for="multiple_appointmentyes">@lang('caseMgmt.attr.yes')</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="multiple_appointmentno" name="multiple_appointment" class="custom-control-input" onclick="SingleAppoinment()" required>
                                            <label class="custom-control-label" for="multiple_appointmentno">@lang('caseMgmt.attr.no')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                 </div>
                 {{-- Single Appoinment --}}
                 
                    <div id="hideSingleAppointment" class="form-group" style="display:none">
                        <div class="row p-t-20">
                    <div class="col-md-4"> 
                        <div class="form-group">
                   
                                <label class="control-label">@lang('caseMgmt.attr.appointment_date') <span class="text-danger">*</span></label>
                                <input type="date" id="appointment_date" class="form-control" required>    
                           
                        </div>
                    </div>
                    <div class="col-md-4"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.location') <span class="text-danger">*</span></label>
                                <select class="form-control" tabindex="1" required>
                                    <option value="">Please Select</option>
                                    <option value="government">@lang('caseMgmt.attr.government')</option>
                                    <option value="private">@lang('caseMgmt.attr.private')</option>
                                </select>   
                            </div>
                    </div>
                </div>
                </div>
                   
                    <div class="row p-t-20">
                        <!-- allow multiple -->
                        <div class="col-md-3"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.appointment_date') <span class="text-danger">*</span></label>
                                <input type="date" id="appointment_date" class="form-control" required> 
                            </div>
                        </div>
                        <!-- allow multiple -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_place') <span class="text-danger">*</span></label>
                                <input type="text" id="treatment_place" class="form-control" required>
                               
                            </div>
                        </div>
                        <!-- allow multiple -->
                        <div class="col-md-3"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.department_name') <span class="text-danger">*</span></label>
                                <select class="form-control" tabindex="1" required>
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_Dr_name') <span class="text-danger">*</span></label>
                                <div class="input-group" required>
                                    <input type="text" id="treatment_Dr_name" class="form-control" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" onclick="treatmentAppointment();"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="treatmentAppointmentDetails"></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    
    function MedicalAppoinment() {
            $('#hideMedAppointment').show();
    }
    function MedicalAppoinment2() {
            $('#hideMedAppointment').hide();
    }

    function MultipleAppoinment() {
            $('#hideMultipleAppointment').show();
    }
    function SingleAppoinment() {
            $('#hideSingleAppointment').show();
    }


</script>

