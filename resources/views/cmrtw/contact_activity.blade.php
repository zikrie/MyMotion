<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact Activity</h4>
                <form class="form">
                    
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Process Type *</label> 
                                <select class="form-control" id="processType" name="processType" required>
                                    <option value="">Please Select</option>
                                    <option value="offer">Offer Confirmation</option>
                                    <option value="query">Query</option>
                                    <option value="ia">Initial Assessment</option>
                                    <option value="caseMgmt">Case Management</option>
                                    <option value="caseClosure">Case Closure</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-t-40">
                        <table id="add-contact" class="display table table-hover table-striped table-bordered" text-align="center" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th align="top">No.</th>
                                    <th>Call By</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Contact Method</th>
                                    <th>Action</th>                               
                                </tr>
                            </thead>
                            <tbody id="add-contact-body">
                                <tr id= "addActivity_1">

                                    <td>1</td>
                                    <td>CM</td>                      
                                    <td>2019-04-08</td>
                                    <td>01:20 PM</td>
                                    <td>Phone</td>
                                    <td> 
                                        <div class= "btn-group">
                                        
                                            <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#addContact" data-id="1">
                                                <span class="glyphicon glyphicon-edit"></span> Update
                                            </button>
                                                            
                                            <button class="delete-modal btn btn-danger" data-id="1">
                                                <span class="glyphicon glyphicon-trash"></span> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button style="margin:5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addContact">Add Activity</button>
                        </div>
                    </div>
                </form>
            </div>      
  
        </div>
    </div>
</div>

{{-- Add --}}
<div id="addContact" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title">Contact Activity Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="rehabForm">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Process Type</label> 
                                <select class="form-control" id="processType" name="processType" required>
                                    <option value="">Please Select</option>
                                    <option value="offer">Offer Confirmation</option>
                                    <option value="query">Query</option>
                                    <option value="ia">Initial Assessment</option>
                                    <option value="caseMgmt">Case Management</option>
                                    <option value="caseClosure">Case Closure</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Relate to :</label> 
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
                    </div>
                    <div class="row p-t-20">       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Case Manager Name</label>
                                <input class="form-control" type="text"  id="cmName">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20"> 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Person Contacted</label>
                                <input class="form-control" type="text"  id="personContacted">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Relationship</label>
                                <input class="form-control" type="text"  id="relationship">
                            </div>
                        </div>
                    </div>  
                            
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Contact Method</label> 
                                <select class="form-control" id="contactMethod" name="contactMethod" required>
                                    <option value="">Please Select</option>
                                    <option value="phone">Phone</option>
                                    <option value="sms">SMS</option>
                                    <option value="ws">Whatsapp</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Contact Date</label>
                                <input class="form-control" type="date"  id="contactDate">
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Contact Time</label>
                                <input class="form-control" type="time"  id="contactTime">
                            </div>
                        </div>
                    </div>
                                                                    
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Contact No.</label>
                                <input class="form-control" type="text"  id="contactNo">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">@lang('ia.attr.remarks')</label>
                                <textarea class="form-control" rows="5" type="textarea"  id="remarks"></textarea>
                            </div>
                        </div>
                    </div>
                            
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="addActivity" data-id="2">
                            <span class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" data-id="3">
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
        $("#addContact").on('click', '#addActivity', function()
        {
            num++;
            var tr = '<tr id="addActivity_'+num+'">' ;
               
                tr += '<td>'+num+'</td>';
                $('#addContact').find('.form-control').each(function()
                {
                    console.log($(this).attr('id'), $(this).val());
                    tr += '<td>'+$(this).val()+'</td>';
                })
                tr += '<td>';
                tr += '<div class= "btn-group">';       
                tr += '<button class="edit-modal btn btn-info" data-toggle="modal" data-target="#addContact"><span class="glyphicon glyphicon-edit"></span> Update </button>'; 
                tr += ' <button class="delete-modal btn btn-danger" data-id="'+num+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
                tr += '</div>';
                tr += '</td>';
                tr += '</tr>';
            $('#add-contact-body').append(tr);

        });


        // delete a post
    $(document).on('click', '.delete-modal', function() {
        $('#addActivity_'+$(this).data('id')).detach();
    });




    $('#addContact').on('show.bs.modal', function (e) 
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