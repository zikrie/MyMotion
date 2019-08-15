<div class="col-12">
        <div class="card">
            <div class="table-responsive m-t-40">
                {{-- <table id="add-contact" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"> --}}
                <table id="add-contact" class="display table table-hover table-striped table-bordered" text-align="center" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th align="top">Number</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Total Claim Days</th>
                            <th>Activity</th>
                            {{-- <th>Remarks</th> --}}
                            <th>Action</th>                               
                        </tr>
                    </thead>
                    <tbody id="add-contact-body">
                        <tr id= "addRehab_1">
    
                            <td>1</td>
                            <td>2019-07-27</td>                      
                            <td>Rehab</td>
                            <td>10</td>
                            <td></td>
                            {{-- <td>test</td> --}}

                            <td> 
                                <div class= "btn-group">
                                
                                    <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                       <br>             
                                    <button class="delete-modal btn btn-danger"  data-id="2">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
    
                        <tr id= "addRehab_2">
                                <td>2</td>
                                <td>2019-07-28</td>                      
                                <td>Job Interview</td>
                                <td>7</td>
                                <td></td>
                                {{-- <td>test</td> --}}
                               
                                <td> 
                                    <div class= "btn-group">
                                
                                        <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#exampleModal" data-id="2">
                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                             <br>           
                                        <button class="delete-modal btn btn-danger"  data-id="2">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
    
                           
                                
                              
    
                       
                    </tbody>
                </table>
            </div>

            <div class="row p-t-20">
                    <div class="col-md-6">
                       <div class="form-group">
                        <label class="control-label">@lang('caseMgmt.attr.total_claim')</label>
                        <input type="text" id="total_claim" class="form-control" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('caseMgmt.attr.total_balance_days')</label>
                            <input type="text" id="total_balance_days" class="form-control" disabled>
                        </div>
                    </div>
            </div>
        </div>
    </div> 