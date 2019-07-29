<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h3 class="card-title">@lang('benefitDetails.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.resource')</label>
                                    <input type="text" id="resource" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.rtwcaserefno')</label>
                                    <input type="text" id="rtwcaserefno" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.officer_name')</label>
                                    <input type="text" id="officer_name" class="form-control">
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.service_details')</label>
                                    <input type="text" id="service_details" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.ob_name')</label>
                                    <input type="text" id="ob_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('benefitDetails.attr.accident_details')</label>
                                    <input type="text" id="accident_details" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h3 class="card-title">@lang('benefitDetails.title1')</h3>    
                        <hr>
                        <!-- Column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive m-t-40">
                                    <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>@lang('benefitDetails.attr.num')</th>
                                                <th>@lang('benefitDetails.attr.office_location')</th>
                                                <th>@lang('benefitDetails.attr.notice_id')</th>
                                                <th>@lang('benefitDetails.attr.register_date')</th>
                                                <th>@lang('benefitDetails.attr.act')</th>
                                                <th>@lang('benefitDetails.attr.claim_type')</th>
                                                <th>@lang('benefitDetails.attr.accident_date')</th>
                                                <th>@lang('benefitDetails.attr.disaster_decision')</th>
                                                <th>@lang('benefitDetails.attr.status')</th>
                                                <th colspan="2" style="text-align:center;">@lang('benefitDetails.attr.action')</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            {{-- @foreach ($workbasket as $wb) --}}
                                            {{-- <tr> --}}
                                                {{-- <td>{{ $wb->wbid }}</td> --}}
                                                {{-- <td>{{substr($wb->date,6,2)}}-{{substr($wb->date,4,2)}}-{{substr($wb->date,0,4)}}</td> --}}
                                                {{-- <td>{{ $datediff }}</td> --}}
                                                {{-- <td>{{ $wb->time }}</td> --}}
                                                {{-- <td>{{ $wb->rtwrefno }}</td> --}}
                                                {{-- <td>{{ $wb->schemerefno }}</td> --}}
                                                {{-- <td>{{ $wb->caseid }}</td> --}}
                                                {{-- <td>{{ $wb->revisionrefno }}</td> --}}
                                                {{-- <td>{{ $wb->medrefno }}</td> --}}
                                                {{-- <td>{{ $wb->descen }}</td> --}}
                                            {{-- </tr> --}}
                                            {{-- @endforeach --}}
                                            <tr>
                                                <td>1</td>
                                                <td>Kuala Lumpur</td>
                                                {{-- <td>{{ $datediff }}</td> --}}
                                                <td>22/03/2019</td>
                                                <td>N12345</td>
                                                <td>4</td>
                                                <td>HUK</td>
                                                <td>12/9/2018</td>
                                                <td>BK</td>
                                                <td><span class="label label-table label-success">Active</span></a>
                                                    <td><button type="button"class="btn btn-warning" data-toggle="modal" data-target="#myModal" id="viewBtn" onclick="buttonClick()">View</button></td>
                                                    <td><div class="custom-control custom-radio"><input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1"></label></div></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kuala Lumpur</td>
                                                {{-- <td>{{ $datediff }}</td> --}}
                                                <td>22/03/2019</td>
                                                <td>N12345</td>
                                                <td>4</td>
                                                <td>HUK</td>
                                                <td>12/9/2018</td>
                                                <td>BK</td>
                                                <td><span class="label label-table label-success">Active</span></a>
                                                    <td><button type="button"class="btn btn-warning" data-toggle="modal" data-target="#myModal" id="viewBtn" onclick="buttonClick1()">View</button></td>
                                                    <td><div class="custom-control custom-radio"><input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2"></label></div></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('benefitDetails.attr.decision')</label>
                                <select class="form-control" tabindex="1">
                                    <option value="">Please Select</option>
                                    <option value="accept">Accept</option>
                                    <option value="reject">Reject</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> @lang('benefitDetails.save')</button>
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--button View-->
<div class="modal fade" id="myModal">
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