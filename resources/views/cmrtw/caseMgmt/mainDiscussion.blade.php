<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class=card-title>Discussion</h5>
                    <form action="#">
                        <div class="form-body">
                                
                                    {{-- <span class="mytooltip tooltip-effect-2"> <span class="tooltip-item">Euclid</span> <span class="tooltip-content clearfix"> <img src="../assets/images/tooltip/Euclid.png" /> <span class="tooltip-text">Also known as Euclid of andria, was a Greek mathematician, often referred.</span> </span> </span> --}}
                            <!-- Column -->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive m-t-40">
                                                <button class="btn btn-success" type="button"><span class="table-add float-right mb-3 mr-2" data-toggle="modal" data-target="#exampleModal1"><a href="#!" class="text-success"><i
                                                    class="fa fa-plus" aria-hidden="true"></i> </a></span></button>
                                            <table id="example231" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>@lang('caseMgmt.attr.no')</th>
                                                                <th>@lang('caseMgmt.attr.category')</th>
                                                                <th>@lang('caseMgmt.attr.rehab_type')</th>
                                                                <th>@lang('caseMgmt.attr.discuss_date')</th>
                                                                <th>@lang('caseMgmt.attr.action')</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            
                                                           

                                                            <tr>
                                                                <td>1</td>
                                                                <td>With Insured Person</td>
                                                                <td>FCE</td>
                                                                <td>19/05/2018</td>
                                                                <td><div class= "btn-group">
                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                                    
                                                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                                    </button>
                                                                </div>
                                                                </td>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Group</td>
                                                                <td>WSA</td>
                                                                <td>18/05/2018</td>
                                                                <td><div class= "btn-group">
                                
                                                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                                    
                                                                    <button class="delete-modal btn btn-danger"  data-id="2">
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
                            </div>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Case Details</h4>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Notice Type</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Notice" id="Notice" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Scheme Reference Number</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Reference" id="Reference" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Case Type</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Type" id="Type" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Notice ID</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="notice_id" id="notice_id" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Type of Act</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Act" id="Act" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Office Location</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Location" id="Location" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Accident Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Accident Date</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Accident_Date" id="Accident_Date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>About Injury</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="About_injury" id="About_injury" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Accident Code</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Accident_code" id="Accident_code" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Company Code</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Company_code" id="Company_code" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Job Code</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Job_code" id="Job_code" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Decision</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Decision" id="Decision" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Potential HUK</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Potential_huk" id="Potential_huk" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">FHUS Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Name and address of clinic which provides treatment</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Name" id="Name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Start Date</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Start_date" id="Start_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>End Date</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="End_date" id="End_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>HUS Approval Status</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Approval_hus" id="Approval_hus" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total HUS Days Approved</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_hus" id="Total_hus" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total FHUS payment (RM)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_fhus" id="Total_fhus" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Supporting Document</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="support_doc" id="support_doc" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">FHUK Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>JD Type</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="JD_type" id="JD_type" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>JD/JDR Session Date</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="JD/JDR" id="JD/JDR" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Assessment Type</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Assessment_type" id="Assessment_type" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>JD/JDR Result</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Result" id="Result" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Assessment %</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Assessment%" id="Assessment%" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total Lump Sum FHUK (RM)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_lump" id="Total_lump" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total Periodical Payment (RM)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_periodical" id="Total_periodical" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>ELS (Y/N)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="ELS" id="ELS" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total ELS  Payment  (RM)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_els" id="Total_els" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Total FHUK (RM)</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Total_fhuk" id="Total_fhuk" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Details Of Supply Equipment</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Item</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Item" id="Item" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Diognasis type</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Diognasis" id="Diognasis" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Status</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Status" id="Status" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="email"><b>Registration Date</b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Registration_date" id="Registration_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Remarks</h4>
                    </div>
                    <div class="modal-body">
                        <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            function buttonClick(){
              document.getElementById("viewBtn").style.backgroundColor = "green";
            }
            function buttonClick1(){
              document.getElementById("viewBtn").style.backgroundColor = "green";
            }
        </script>
    

    
