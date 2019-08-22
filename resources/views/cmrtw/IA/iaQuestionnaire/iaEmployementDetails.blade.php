<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
    <div class="form-group">    
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.work')<span class="text-danger">*</span></label>
                    <div class="row p-l-20">
                        <div class="custom-control custom-radio" >
                            <input type="radio" id="yes1" name="yes1" class="custom-control-input" required>
                            <label class="custom-control-label" for="yes1">@lang('caseMgmt.attr.yes')</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="no1" name="yes1" class="custom-control-input" required>
                            <label class="custom-control-label" for="no1">@lang('caseMgmt.attr.no')</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('caseMgmt.attr.rtw_hierarchy')<span class="text-danger">*</span></label>
                    <select class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="rtw_hierarchy1">@lang('caseMgmt.attr.rtw_hierarchy1')</option>
                        <option value="rtw_hierarchy2">@lang('caseMgmt.attr.rtw_hierarchy2')</option>
                        <option value="rtw_hierarchy3">@lang('caseMgmt.attr.rtw_hierarchy3')</option> 
                        <option value="rtw_hierarchy4">@lang('caseMgmt.attr.rtw_hierarchy4')</option>
                        <option value="rtw_hierarchy5">@lang('caseMgmt.attr.rtw_hierarchy5')</option>
                        <option value="rtw_hierarchy6">@lang('caseMgmt.attr.rtw_hierarchy6')</option>
                        <option value="rtw_hierarchy7">@lang('caseMgmt.attr.rtw_hierarchy7')</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('caseMgmt.attr.rtw_date2')<span class="text-danger">*</span></label>
                    <input type="date" id="rtw_date" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">   
                    <label for="example-text-input" class="col-form-label">@lang('ia.attr.medicalLeave') <span class="text-danger">*</span></label>
                    <div class="row p-l-20">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="yesMC" name="medicalLeave" class="custom-control-input" required>
                            <label class="custom-control-label" for="yesMC">@lang('ia.attr.yes')</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="noMC" name="medicalLeave" class="custom-control-input" required>
                            <label class="custom-control-label" for="noMC">@lang('ia.attr.no')</label>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row p-t-20">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label">@lang('caseMgmt.attr.remarks')</label>
                    <textarea class="form-control clearFields" rows="3" type="textarea"  id="empRemarks"></textarea>
                </div>
            </div>
        </div>
        <!-- current emp details -->
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.title31')</h4>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-12">
                <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployment"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <div class="table-responsive">  
            <table id="add-employment" class="display table table-hover table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th align="top">No.</th>
                        <th>Occupation</th>
                        <th>Scope of Task</th>
                        <th>Action</th>
                        <th style="display:none;" align="top">No.</th>
                        <th style="display:none;">Occupation</th>
                        <th style="display:none;">Scope of Task</th>
                        <th style="display:none;">Action</th>
                        <th style="display:none;" align="top">No.</th>
                        <th style="display:none;">Occupation</th>
                        <th style="display:none;">Scope of Task</th>
                        <th style="display:none;">Action</th>
                        <th style="display:none;" align="top">No.</th>
                        <th style="display:none;">Occupation</th>
                        <th style="display:none;" >Scope of Task</th>
                        <th style="display:none;">Action</th>        
                        <th style="display:none;">Action</th>                  
                    </tr>
                </thead>
                <tbody id="add-employment-body">
                    <tr id= "addActivity_0">
                    </tr>
                </tbody>
            </table>
        </div>

<!-- sejarah pekerjaan -->
        <div class="row p-t-20">
            <div class="col-md-12">
                
                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                    <h4 class="mb-0">@lang('ia.attr.workingHistory')</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-md-12">
                <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#addWorkHistory"><i class="fa fa-plus"></i></button>
            </div>
        </div>
          
        <div class="table-responsive">     
            <table id="add-work_history" class="display table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th align="top">No.</th>
                        <th>Employer Name</th>
                        <th>Duration of Employment</th>
                        <th>Position</th> 
                        <th>Action</th>
                        <th align="top">No.</th>
                        <th>Employer Name</th>
                        <th>Duration of Employment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="add-work_history-body">
                    <tr id= "addWorkHistory_1">
                    </tr>
                </tbody>
            </table>
        </div>
</div>
{{-- Add --}}
<div id="addEmployment" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@lang('ia.title3')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="employmentForm">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.occupation') <span class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>     
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.scopeOfTasks') <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3" type="textarea"  id="scope"></textarea>
                            </div>
                        </div>
                    </div> 
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.mainGroup')</label>
                                <select class="form-control" required>
                                    <option value="" >Please select</option>
                                    <option value="1">Rujuk Senarai MASCO Kod 2008</option>
                                </select>
                            </div>
                        </div>     
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.subMainGroup')</label>
                                <select class="form-control" required>
                                    <option value="" >Please select</option>
                                    <option value="1">Rujuk Senarai MASCO Kod 2008</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.subGroup')</label>
                                <select class="form-control" required>
                                    <option value="" >Please select</option>
                                    <option value="1">Rujuk Senarai MASCO Kod 2008</option>
                                </select>
                            </div>
                        </div>
                    </div>   
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.osi') <span class="text-danger">*</span></label>
                                <select class="form-control select" id="bankloc" name="bankloc" required>
                                    <option value="">Please Select</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Nature">Nature</option>
                                    <option value="Scientific">Scientific</option>
                                    <option value="Culture">Culture</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Helping">Helping</option>
                                    <option value="Persuasive">Persuasive</option>
                                    <option value="Organising">Organising</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.industry') <span class="text-danger">*</span></label>
                                <select class="form-control select" id="bankloc" name='bankloc' onchange="industry1(this.options[this.selectedIndex].value)" required>
                                    <option value="">Please Select</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="forestry">Forestry</option>
                                    <option value="fishery">Fishery</option>
                                    <option value="mining">Mining</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="services">Services</option>
                                    <option value="construction">Construction</option>
                                    <option value="transportation">Transportation</option>
                                    <option value="water">Water and Sewerage Services</option>
                                    <option value="electric">Electric and Electronics</option>
                                    <option value="oil">Oil and Gas</option>
                                    <option value="trade">Trade, Commerce and Retail</option>
                                    <option value="public">Public services</option>
                                    <option value="financial">Financial Institutions and Insurance</option>
                                    <option value="slefwork">Self-work</option>
                                    <option value="others">Other (Specify)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div id="othersHide1" class="form-group" style="display:none">                    
                                    <label class="control-label">@lang('caseMgmt.attr.specify') <span class="text-danger">*</span></label>
                                    <input type="text" id="industryRemarks" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                                                                    
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.workingHours') <span class="text-danger">*</span></label>
                                <select class="form-control select"  required>
                                    <option value="">Please Select</option>
                                    <option value="normalHour">@lang('ia.attr.normal')</option>
                                    <option value="shift">@lang('ia.attr.shift')</option>                                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.numbersOfWorking') <span class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.hoursOfDay') <span class="text-danger">*</span></label>
                                <input type="text" id="jam" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">   
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.fulltimeWorkingAbility') <span class="text-danger">*</span></label>
                                <div class="row"> 
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="yes123" name="yes223" class="custom-control-input" required>
                                        <label class="custom-control-label" for="yes123">@lang('ia.attr.yes')</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="no123" name="yes223" class="custom-control-input" required >
                                        <label class="custom-control-label" for="no123">@lang('ia.attr.no')</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.wagesPayment') <span class="text-danger">*</span></label>
                                <select class="form-control select"  required>
                                    <option value="">Please Select</option>
                                    <option value="monthRate">Monthly Rate</option>
                                    <option value="dailyRate">Daily Rate</option>                                
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.latestSalary') <span class="text-danger">*</span></label>
                                <input type="text" id="latestSalary" class="form-control" placeholder="RM">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.paymentRate') <span class="text-danger">*</span></label>
                                <select class="form-control select"  required>
                                    <option value="">Please Select</option>
                                    <option value="Full">Full Salary</option>
                                    <option value="Half">Half Salary</option>  
                                    <option value="No">No Salary</option>                                
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.remarks')</label>
                                <textarea class="form-control" rows="3" type="textarea"  id="employmentRemarks"></textarea>
                            </div>
                        </div>
                    </div>
                            
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addNewEmployment">
                        <span class='glyphicon glyphicon-check'></span>Save
                    </button>
                </div>
            </div>    
        </div>
    </div>
</div>

{{-- Add Work History --}}
<div id="addWorkHistory" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@lang('ia.attr.workingHistory')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="workHistoryForm">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.employersName')</label>
                                <input type="text" id="employers" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.durationOfEmployment')</label>
                                <select class="form-control select"  required>
                                    <option value="">Please Select</option>
                                    <option value="">Less than a year</option>
                                    <option value="">1-5 Years</option>
                                    <option value="">6-10 Years</option>  
                                    <option value="">More than 10 Years</option>                                 
                                </select>
                            </div>
                        </div>
                    </div> 
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.position')</label>
                                <input type="text" id="jawatan" class="form-control">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.income')</label>
                                <input type="text" id="pendapatan" class="form-control">
                            </div>
                        </div>
                    </div>   
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.scopeOfTasks') <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3" type="textarea"  id="scope"></textarea>
                            </div>
                        </div>
                    </div>
                                                                    
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.reasonToQuit')</label>
                                <select class="form-control select"  required>
                                    <option value="">Please Select</option>
                                    <option value="">Career advancement</option>
                                    <option value="">Health</option>
                                    <option value="">VSS/MSS</option>  
                                    <option value="">Others</option>                               
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('ia.attr.remarks')</label>
                                <textarea class="form-control" rows="3" type="textarea"  id="employmentRemarks"></textarea>
                            </div>
                        </div>
                    </div>
                            
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addNewWorkHistory">
                        <span class='glyphicon glyphicon-check'></span>Save
                    </button>
                </div>
            </div>    
        </div>
    </div>
</div>

</div> 
</div>
</div>
</div>


 <script type="text/javascript">

    function osi(aval) 
    {
        if (aval == "others") 
        {
            $('#osiHide').show();
        } 
        else 
        {
            $('#osiHide').hide();
        }

    }
    function industry(aval) 
    {
        if (aval == "others") 
        {
            $('#othersHide').show();
        } 
        else 
        {
            $('#othersHide').hide();
        }

    }
    function industry1(aval) 
    {
        if (aval == "others") 
        {
            $('#othersHide1').show();
        } 
        else 
        {
            $('#othersHide1').hide();
        }

    }


</script>
{{-- <script type="text/javascript">

// add
var numE = 0;
$(document).ready(function()
{
    $("#addEmployment").on('click', '#addNewEmployment', function()
    {
        numE++;
        var tr = '<tr id="addActivity_'+numE+'">' ;
           
            tr += '<td>'+numE+'</td>';
            $('#addEmployment').find('.form-control').each(function()
            {
                if(){
                    console.log($(this).attr('id'), $(this).val());
                    tr += '<td>'+$(this).val()+'</td>';
                }else if{
                    console.log($(this).attr('id'), $(this).val());
                    tr += '<td>'+$(this).val()+'</td>';
                }
                else{
                    console.log($(this).attr('id'), $(this).val());
                    tr += '<td>'+$(this).val()+'</td>';
                }
            })
            tr += '<td>';
            tr += '<div class= "btn-group">';       
            tr += '<button class="edit-modal btn btn-info" data-toggle="modal" data-target="#addEmployment"><span class="glyphicon glyphicon-edit"></span> Update</button>'; 
            tr += ' <button class="delete-modal btn btn-danger" data-id="'+numE+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
            tr += '</div>';
            tr += '</td>';
            tr += '</tr>';
        $('#add-employment-body').append(tr);

    });


    // delete a post
$(document).on('click', '.delete-modal', function() {
    $('#addActivity_'+$(this).data('id')).detach();
    numE--;
});




$('#addEmployment').on('show.bs.modal', function (e) 
{
    console.log($(e.relatedTarget).data('id'));

})


})

</script>  --}}

<script type="text/javascript">

// add
var numWH = 0;
$(document).ready(function()
{
    $("#addWorkHistory").on('click', '#addNewWorkHistory', function()
    {
        numWH++;
        var tr = '<tr id="addWorkHistory_'+numWH+'">' ;
           
            tr += '<td>'+numWH+'</td>';
            $('#addWorkHistory').find('.form-control').each(function()
            {
                console.log($(this).attr('id'), $(this).val());
                tr += '<td>'+$(this).val()+'</td>';
            })
            tr += '<td>';
            tr += '<div class= "btn-group">';       
            tr += '<button class="edit-modal btn btn-info" data-toggle="modal" data-target="#addWorkHistory"><span class="glyphicon glyphicon-edit"></span> Update</button>'; 
            tr += ' <button class="delete-modal btn btn-danger" data-id="'+numWH+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
            tr += '</div>';
            tr += '</td>';
            tr += '</tr>';
        $('#add-work_history-body').append(tr);

    });


    // delete a post
$(document).on('click', '.delete-modal', function() {
    $('#addWorkHistory_'+$(this).data('id')).detach();
    numWH--;
});




$('#addWorkHistory').on('show.bs.modal', function (e) 
{
    console.log($(e.relatedTarget).data('id'));

})


})

</script> 

<!-- // function printDiv(divName) {
//  var printContents = document.getElementById(divName).innerHTML;
//  var originalContents = document.body.innerHTML;

//  document.body.innerHTML = printContents;

//  window.print();

//  document.body.innerHTML = originalContents;
// } -->


<!-- // function printFunction() 
// {
//   window.print();
// } -->



