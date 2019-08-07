{{-- <div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.rehabPlan')</label> 
            <select class="form-control select "id="bankloc" name='bankloc' required>
                <option value="">Please Select</option>
                <option value="fce">FCE</option>
                <option value="wsa">WSA</option>
                <option value="prm">PRM</option>
                <option value="mm">MM</option>
                <option value="va">VA</option>
                <option value="vtm">VTM</option>
                <option value="jp">JP</option>
                <option value="sk">Financial Support</option>
                <option value="sp">Business Support</option>
                <option value="ra">Rehab Allowance</option>
                <option value="sm">Mobility Support</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.startTimeSuggestions')</label>
            <input class="form-control" type="date"  id="cdgnMasaMula">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.estimatedCost')</label>
            <input class="form-control" type="text"  id="anggarankos"  placeholder="RM 0.00">
        </div>
    </div>
</div>




<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.communicationFrequency')</label> 
            <select class="form-control">
                <option value="">Please Select</option>
                <option value="">Once a week</option>
                <option value="">Two times a month</option>
                <option value="">Once a month</option>
                <option value="">Once in two months</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.justificationCommunication')</label>
            <input class="form-control" type="text"  id="anggarankos"  placeholder="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">Status</label>
            <select class="form-control">
                <option value="">Please Select</option>
                <option value="">New</option>
                <option value="">In action</option>
                <option value="">Cancel</option>
                <option value="">Done</option>
            </select>
        </div>
    </div>
</div>



<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.reasonForCancel')</label> 
            <input class="form-control" type="text"  id="anggarankos">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label">@lang('ia.attr.remarks')</label>
            <input class="form-control" type="text"  id="remarks">
        </div>
    </div>
</div>


<div class="form-group row">
    <div class="col-12">
        <button class="btn btn-success" type="button" onclick="rehabPlanningDetails();"><i class="fa fa-plus">  Add</i></button>
    </div> 
</div>

<div id="rehabPlanningDetails"></div>
 --}}

 {{-- <div class="form-group row">
    <div class="col-12">
        <button style="margin:5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Rehab Plan</button>
        <button style="margin:5px;" type="button" class="btn btn-primary" >Print Rehab Plan</button>
    </div>
</div> --}}

<div id="printRehabPlan">
    <div class="card">
        <div class="table-responsive m-t-40">
            {{-- <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"> --}}
            <table id="add-contact" class="display table table-hover table-striped table-bordered" text-align="center" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th align="top">Number</th>
                        <th>Rehab Plan</th>
                        <th>Start Time Suggestions</th>
                        <th>Estimated Cost</th>
                        <th>Communication Rate</th>
                        <th>Justification Communication Rate</th>
                        <th>Status</th>
                        <th>Reason for Cancellation</th>
                        {{-- <th>Remarks</th> --}}
                        <th>Action</th>                               
                    </tr>
                </thead>
                <tbody id="add-contact-body">
                    <tr id= "addRehab_1">

                        <td>1</td>
                        <td>FCE</td>                      
                        <td>2019-04-08</td>
                        <td>RM 154.00</td>
                        <td>Once a week</td>
                        <td>test</td>
                        <td>Cancel</td>
                        {{-- <td>test</td> --}}
                        <td>test</td>
                        <td> 
                            <div class= "btn-group">
                            
                                <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="1">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </button>
                                                
                                <button class="delete-modal btn btn-danger" data-id="1">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr id= "addRehab_2">
                            <td>2</td>
                            <td>WSA</td>                      
                            <td>2019-08-01</td>
                            <td>RM 500.00</td>
                            <td>Two times a month</td>
                            <td>test</td>
                            <td>In Action</td>
                            {{-- <td>test</td> --}}
                            <td>test</td>
                            <td> 
                                <div class= "btn-group">
                                
                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                                    
                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr id= "addRehab_3">
                                <td>3</td>
                                <td>FCE</td>                      
                                <td>2019-08-01</td>
                                <td>RM 100.00</td>
                                <td>Once in two months</td>
                                <td>test</td>
                                <td>New</td>
                                {{-- <td>test</td> --}}
                                <td>test</td>
                                <td> 
                                    <div class= "btn-group">
                                    
                                        <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="3">
                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                                        
                                        <button class="delete-modal btn btn-danger"  data-id="3">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr> 
                            
                          

                   
                </tbody>
            </table>
        </div>
    </div>
</div> 


<div class="form-group row">
    <div class="col-12">
        <button style="margin:5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Rehab Plan</button>
        <button style="margin:5px;" type="button" class="btn btn-primary" onclick="printDiv('printRehabPlan')">Print Rehab Plan</button>
    </div>
</div>


    

{{-- Add --}}
<div id="exampleModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="rehabForm">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.rehabPlan')</label> 
                                <select class="form-control select" id="bankloc" name="bankloc" required>
                                    <option value="">Please Select</option>
                                    <option value="FCE">FCE</option>
                                    <option value="WSA">WSA</option>
                                    <option value="PRM">PRM</option>
                                    <option value="MM">MM</option>
                                    <option value="VA">VA</option>
                                    <option value="VTM">VTM</option>
                                    <option value="JP">JP</option>
                                    <option value="Financial Support">Financial Support</option>
                                    <option value="Business Support">Business Support</option>
                                    <option value="Rehab Allowance">Rehab Allowance</option>
                                    <option value="Mobility Support">Mobility Support</option>
                                </select>
                            </div>
                        </div>
                            
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.startTimeSuggestions')</label>
                                <input class="form-control" type="date"  id="cdgnMasaMula">
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.estimatedCost')</label>
                                <input class="form-control" type="text"  id="anggarankos"  placeholder="RM 0.00">
                            </div>
                        </div>
                    </div>  
                            
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.communicationRate')</label> 
                                <select class="form-control" id="communication" name="communication" required>
                                    <option value="">Please Select</option>
                                    <option value="Once a week">Once a week</option>
                                    <option value="Two times a month">Two times a month</option>
                                    <option value="Once a month">Once a month</option>
                                    <option value="Once in two months">Once in two months</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.justificationCommunicationRate')</label>
                                <input class="form-control" type="text"  id="anggarankos"  placeholder="">
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="">Please Select</option>
                                    <option value="New">New</option>
                                    <option value="In action">In action</option>
                                    <option value="Cancel">Cancel</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                                                                    
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.reasonForCancel')</label> 
                                <input class="form-control" type="text"  id="reason">
                            </div>
                        </div>
                    
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.remarks')</label>
                                <input class="form-control" type="text"  id="remarks">
                            </div>
                        </div>
                    </div>
                            
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addRehab">
                            <span class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
            </div>    
        </div>
    </div>
</div>


<script>

    // add
    var num = 3;
    $(document).ready(function()
    {
        $("#exampleModal").on('click', '#addRehab', function()
        {
            num++;
            var tr = '<tr id="addRehab_'+num+'">' ;
               
                tr += '<td>'+num+'</td>';
                $('#exampleModal').find('.form-control').each(function()
                {
                    console.log($(this).attr('id'), $(this).val());
                    tr += '<td>'+$(this).val()+'</td>';
                })
                tr += '<td>';
                tr += '<div class= "btn-group">';       
                tr += '<button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-edit"></span> Edit</button>'; 
                tr += ' <button class="delete-modal btn btn-danger" data-id="'+num+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
                tr += '</div>';
                tr += '</td>';
                tr += '</tr>';
            $('#add-contact-body').append(tr);

        });


        // delete a post
    $(document).on('click', '.delete-modal', function() {
        $('#addRehab_'+$(this).data('id')).detach();
    });




    $('#exampleModal').on('show.bs.modal', function (e) 
    {
        console.log($(e.relatedTarget).data('id'));
    
    })


    })



    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


// function printFunction() 
// {
//   window.print();
// }


</script> 