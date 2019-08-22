@section('form_control1')
<style>
    .form-control1 {
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: .875rem;
    line-height: 1.5;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #949596ab !important;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    margin: 0px 5px !important;
    padding:5px !important;
}
</style>
@endsection


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
                            <div class="col-md-2"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.appointment_date') <span class="text-danger">*</span></label>
                                    <input type="date" id="appointment_date" class="form-control" required>       
                                </div>
                            </div>
                            <div class="col-md-2"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.location') <span class="text-danger">*</span></label>
                                        <select class="form-control" onchange="myHospital(this.options[this.selectedIndex].value)" required>
                                            <option value="">Please Select</option>
                                            <option value="government">@lang('caseMgmt.attr.government')</option>
                                            <option value="private">@lang('caseMgmt.attr.private')</option>
                                        </select>   
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                 <div class="form-group">
                                    <div id="hideGovernment" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.department_name') <span class="text-danger">*</span></label>
                                        <select class="form-control" tabindex="1" onchange="myNamaHospital(this.options[this.selectedIndex].value)" required>
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
                                            <option value="others">@lang('caseMgmt.attr.others')</option>
                                        </select>   
                                    </div>
                                    <div id="hideHospitalname" class="form-group" style="display:none">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.hospital_name')</label>
                                            <input class="form-control"  type="text"  value="" id="hospital_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="hideNamaHospital" class="form-group" style="display:none">
                                    <div class="form-group">
                                         <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                         <input class="form-control"  type="text"  value="" id="specify">
                                     </div>
                                </div>
                            </div>
                        </div>
                         <div class="row p-t-20">
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_Dr_name') <span class="text-danger">*</span></label>
                                <input type="text" id="treatment_Dr_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.doctor_phoneno') <span class="text-danger">*</span></label>
                                <input type="text" id="doctor_phoneno" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    </div>
                    {{-- Multiple Appoinment --}}

                   <div id="hideMultipleAppointment" class="form-group" style="display:none">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTreatmentAppointment"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                        <div class="table-responsive">  
                            <table id="add-treatmentappointment" class="display table table-hover table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th align="top">No.</th>
                                    <th>Appoinment Date</th>
                                    <th>Hospital Name</th>
                                    <th>Department</th>
                                    <th>Doctor's Name</th>
                                    <th>Doctor's Phone</th>
                                    <th>Action</th>
                                  {{--   <th style="display:none;" align="top">No.</th>
                                    <th style="display:none;">Appoinment Date</th>
                                    <th style="display:none;">Hospital Name</th>
                                    <th style="display:none;">Department</th>
                                    <th style="display:none;">Doctor's Name</th>
                                    <th style="display:none;">Doctor's Phone</th>
                                    <th style="display:none;">Action</th>
                                    <th style="display:none;" align="top">No.</th>
                                    <th style="display:none;">Appoinment Date</th>
                                    <th style="display:none;">Hospital Name</th>
                                    <th style="display:none;">Department</th>
                                    <th style="display:none;">Doctor's Name</th>
                                    <th style="display:none;">Doctor's Phone</th>
                                    <th style="display:none;">Action</th>
                                    <th style="display:none;" align="top">No.</th>
                                    <th style="display:none;">Appoinment Date</th>
                                    <th style="display:none;" >Hospital Name</th>
                                    <th style="display:none;">Department</th>
                                    <th style="display:none;">Doctor's Name</th>
                                    <th style="display:none;">Doctor's Phone</th>
                                    <th style="display:none;">Action</th>        
                                    <th style="display:none;">Action</th>  --}}                 
                                </tr>
                            </thead>
                            <tbody id="add-treatmentappointment-body">
                                <tr id= "TreatmentAppointment_0">
                                </tr>
                            </tbody>
                         </table>
                    </div>
                    
                 </div>
                    {{-- <div class="row p-t-20">
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
                    </div> --}}
                        {{-- <div id="treatmentAppointmentDetails"></div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Work History --}}
<div id="addTreatmentAppointment" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@lang('caseMgmt.attr.multiple_appointment')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="TreatmentAppointmentForm">
                    <div class="row p-t-20">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.appointment_date') <span class="text-danger">*</span></label>
                                    <input type="date" id="appointment_date" class="form-control1" required>       
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="control-label">@lang('caseMgmt.attr.location') <span class="text-danger">*</span></label>
                                        <select class="form-control1" onchange="myHospitalmodal(this.options[this.selectedIndex].value)" required>
                                            <option value="">Please Select</option>
                                            <option value="government">@lang('caseMgmt.attr.government')</option>
                                            <option value="private">@lang('caseMgmt.attr.private')</option>
                                        </select>   
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                 <div class="form-group">
                                    <div id="hideGovernmentmodal" class="form-group" style="display:none">
                                        <label class="control-label">@lang('caseMgmt.attr.department_name') <span class="text-danger">*</span></label>
                                        <select class="form-control1" tabindex="1" onchange="myNamaHospitalmodal(this.options[this.selectedIndex].value)" required>
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
                                            <option value="others">@lang('caseMgmt.attr.others')</option>
                                        </select>   
                                    </div>
                                    <div id="hideHospitalnamemodal" class="form-group" style="display:none">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseMgmt.attr.hospital_name')</label>
                                            <input class="form-control"  type="text"  value="" id="hospital_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="hideNamaHospitalmodal" class="form-group" style="display:none">
                                    <div class="form-group">
                                         <label class="control-label">@lang('caseMgmt.attr.specify')</label>
                                         <input class="form-control"  type="text"  value="" id="specify">
                                     </div>
                                </div>
                            </div>
                        </div>
                         <div class="row p-t-20">
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.treatment_Dr_name') <span class="text-danger">*</span></label>
                                <input type="text" id="treatment_Dr_name" class="form-control1" required>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label class="control-label">@lang('caseMgmt.attr.doctor_phoneno') <span class="text-danger">*</span></label>
                                <input type="text" id="doctor_phoneno" class="form-control1" required>
                            </div>
                        </div>
                    </div>
                            
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addNewTreatmentAppoinment">
                        <span class='glyphicon glyphicon-check'></span>Save
                    </button>
                </div>
            </div>    
        </div>
    </div>
</div>

<script type="text/javascript">
    
    function MedicalAppoinment() {
            $('#hideMedAppointment').show();
            $('#hideSingleAppointment').hide();
            $('#hideMultipleAppointment').hide();
    }
    function MedicalAppoinment2() {
            $('#hideMedAppointment').hide();
            $('#hideSingleAppointment').hide();
            $('#hideMultipleAppointment').hide();
    }

    function MultipleAppoinment() {
            $('#hideMultipleAppointment').show();
            $('#hideSingleAppointment').hide();
    }
    function SingleAppoinment() {
            $('#hideSingleAppointment').show();
            $('#hideMultipleAppointment').hide();
    }


</script>
<script type="text/javascript">

    function myHospital(aval) 
    {
        if (aval == "government") 
        {
            $('#hideGovernment').show();
            $('#hideHospitalname').hide();
        } 
        else if(aval == "private")
        {
            $('#hideGovernment').hide();
            $('#hideHospitalname').show();
            $('#hideNamaHospital').hide();
        }
        else
         {
            $('#hideGovernment').hide();
            $('#hideHospitalname').hide();
        }


    }
   
    function myNamaHospital(aval) 
    {
        if (aval == "others") 
        {
            $('#hideNamaHospital').show();
        } 
        else
        {
            $('#hideNamaHospital').hide();
        }
    }
// javascript modal
     function myHospitalmodal(aval) 
    {
        if (aval == "government") 
        {
            $('#hideGovernmentmodal').show();
            $('#hideHospitalnamemodal').hide();

        } 
        else if(aval == "private")
        {
            $('#hideGovernmentmodal').hide();
            $('#hideHospitalnamemodal').show();
            $('#hideNamaHospitalmodal').hide();
        }
        else
         {
            $('#hideGovernmentmodal').hide();
            $('#hideHospitalnamemodal').hide();
        }


    }

    function myNamaHospitalmodal(aval) 
    {
        if (aval == "others") 
        {
            $('#hideNamaHospitalmodal').show();
        } 
        else
        {
            $('#hideNamaHospitalmodal').hide();
        }
    }
</script>
<script type="text/javascript">

// add
var numTA = 0;
$(document).ready(function()
{
    $("#addTreatmentAppointment").on('click', '#addNewTreatmentAppoinment', function()
    {
        numTA++;
        var tr = '<tr id="TreatmentAppointment_'+numTA+'">';
           
            tr += '<td>'+numTA+'</td>';
            $('#addTreatmentAppointment').find('.form-control1').each(function()
            {
                console.log($(this).attr('id'), $(this).val());
                tr += '<td>'+$(this).val()+'</td>';
            })
            tr += '<td>';
            tr += '<div class= "btn-group">';       
            tr += '<button class="edit-modal btn btn-info" data-toggle="modal" data-target="#addTreatmentAppointment"><span class="glyphicon glyphicon-edit"></span> Update</button>'; 
            tr += ' <button class="delete-modal btn btn-danger" data-id="'+numTA+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
            tr += '</div>';
            tr += '</td>';
            tr += '</tr>';
        $('#add-treatmentappointment-body').append(tr);

    });


    // delete a post
$(document).on('click', '.delete-modal', function() {
    $('#TreatmentAppointment_'+$(this).data('id')).detach();
    numTA--;
});


$('#addTreatmentAppointment').on('show.bs.modal', function (e) 
{
    console.log($(e.relatedTarget).data('id'));

})

})

</script> 
